# Oz Api services

## System requirements

* Any OS, supported by [Docker](https://docs.docker.com/engine/faq/), with Docker installed.
* CPU: 4x cores
* RAM: 8Gb
* Disk 250Gb+:
  * 50Gb - for OS
  * 100Gb+ - for Postgres database
  * 100Gb+ - for clients' media files

## Additional requirements

* **nginx** locally [installed](https://nginx.org/en/docs/install.html). *Recommended configuration below*.
* **Domain name** associated with current IP address.
* **SSL certificate** associated with domain name.
* Accessible external **443 port** for HTTPS access.
* All preparation and configuration steps will be performed under **root** user.

*Notes. You don't need Domain name, SSL certificate and 443 port opened is case of testing in local network.*

## Step by step installation

### Login to Docker Hub

Obtain your personal docker hub **token** to login to private repository.

```sh
docker login -u ozcustomer -p your_token_here
```

### Download and run latest image

```sh
docker pull ozforensics/oz-api

```

### Prepare configuration files and directories

#### Directories

Create root directory for data somewhere in your system. Here and further we will assume default directory is ``/opt/oz``.
```sh
mkdir -p /opt/oz/postgres
chown -R 999 /opt/oz/postgres
```

#### Run Postgres

```sh
docker run --restart unless-stopped --name oz-api-pg \
-v /opt/oz/postgres:/var/lib/postgresql/data
-e POSTGRES_PASSWORD=CHANGEME postgres:13
```

*Notes. Normally, you may use locally installed Postgres instance instead of docker container with the same instructions below.*

#### Run API

```sh
docker run -d --name oz-api --restart unless-stopped --privileged=true \
--mount source=oz-api-nginx-vol,destination=/etc/nginx/sites-enabled \
--mount source=oz-api-config-vol,destination=/opt/gateway/configs \
--mount source=oz-api-static-vol,destination=/opt/gateway/static \
--mount source=oz-api-log-vol,destination=/opt/gateway/log \
--link oz-api-pg \
-p 8000:8000 \
ozforensics/oz-api
```

*Notes. Exclude ``--link oz-api-pg`` line in case of locally installed Postgres instance, just set correct host name of your machine to ``DB_HOST`` setting below.*

#### Oz API directories

Several volumes related directories will be created after``oz-api`` succesfully started. You will find it at ``/var/lib/docker/volumes``:
* ``oz-api-nginx-vol`` - configuration file for inner nginx
* ``oz-api-config-vol`` - overall configuration files
* ``oz-api-static-vol`` - media data
* ``oz-api-log-vol`` - inner system logs
You will find actual data inside ``_data`` subdirectories. All configuration details read below.

***Warning***!
Please, pay attention to ``oz-api-static-vol`` directory, which could be infinitely grow, by 10Mb per analyze request.
Optionally, you could change volume destination with different ``docker`` startup command:

```sh
docker run -d --name oz-api --restart unless-stopped --privileged=true \
--mount source=oz-api-nginx-vol,destination=/etc/nginx/sites-enabled \
--mount source=oz-api-config-vol,destination=/opt/gateway/configs \
--mount source=oz-api-log-vol,destination=/opt/gateway/log \
--mount type=volume,dst=/opt/gateway/static,volume-driver=local,volume-opt=type=none,volume-opt=o=bind,volume-opt=device=/media/big-storage
--link oz-api-pg \
-p 8000:8000 \
ozforensics/oz-api
```
where ``/media/big-storage`` is your alternative storage place.

#### Configuration files

Most of default settings is usable out of box. You just need to set few ones, which is required.

``oz-api-nginx-vol/_data/api.conf``
This is inner **nginx** config. Set to ``server_name`` your host's domain name, or just set ``_`` (underscore).

``oz-api-config-vol/_data/config.py``
This file contains global variables to use by API. Refer to [additional information](https://ozforensics.com/oz_api/general_info/oz_api_configuration) about configuration settings.
Please, set properly next variables:

* ``ALLOWED_HOSTS`` - add your **domain name** to list
* ``DB_HOST``, ``DB_USER``, ``DB_PASS``- change it if you planning to move ``oz-api-pg`` container, or has custom database build
*  ``OZ_SERVICE_TFSS_HOST`` - set address of your Oz Bio services host. Address example: ``http://oz-bio-tfss:8501/v1/``

To apply settings you need to restart ``oz-api`` container:

```sh
docker restart oz-api
```



### Prepare and run database

You have two options to create database:
1. unpack and use demo database
2. rebuild empty database

#### Use demo database

*Use this method if you received personal database package:*
``oz-api-pg-data-COMPANY-NAME.tar.gz``
Just unpack this package in directory you previously created, it will rewrite content of ``database`` directory inside.

```sh
cd /opt/oz
tar -zxvf oz-api-pg-data-COMPANY-NAME.tar.gz
```

#### Database builder

You need to run several scripts to build your database. We assume, you have both containers ``oz-api`` and ``oz-api-pg`` running.
After execution you will obtain credentials:

1. login to database ``gateway``:
 * login:``gateway_user``
 * password: ``CHANGEUSERPASS``
2. login to Oz API (with ADMIN [privileges](https://ozforensics.com/oz_api/general_info/access_model)):
 * login: ``demo@ozforensics.com``
 * password: ``123456``
You can always change script to modify this defaults.
Please, restart ``oz-api`` container to apply changes.

Create database:
```sh
docker exec -ti oz-api-pg bash
su postgres
psql
\c postgres
DROP DATABASE gateway;
DROP ROLE gateway_user;
CREATE ROLE gateway_user WITH LOGIN PASSWORD 'CHANGEUSERPASS'
  INHERIT
  CONNECTION LIMIT -1
  NOSUPERUSER
  NOCREATEDB
  NOCREATEROLE
  NOREPLICATION ;
CREATE DATABASE gateway
  WITH OWNER = gateway_user
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       CONNECTION LIMIT = -1
       LC_COLLATE='en_US.UTF-8'
       LC_CTYPE='en_US.UTF-8'
       TEMPLATE template0;
\c gateway
CREATE EXTENSION pgcrypto;
\q
exit
exit
```

Create API tables and built-in administrator:
```sh
docker exec -ti oz-api bash
su oz
cd /opt/gateway/
source env/bin/activate
python manage.py alchemy_create oz_core
python manage.py alchemy_create lamb.execution_time
python manage.py oz_create_admin --email=demo@ozforensics.com --password=123456
exit
exit
```

Create additional indices:
```sh
docker exec -ti oz-api-pg bash
su postgres
psql
\c gateway
CREATE INDEX IF NOT EXISTS gw_folder_time_created_idx ON gw_folder(time_created DESC);
CREATE INDEX IF NOT EXISTS gw_folder_time_created_folder_id_idx ON gw_folder(time_created DESC, folder_id DESC);
CREATE INDEX IF NOT EXISTS gw_folder_time_created_nonarchive_idx ON gw_folder(time_created DESC) WHERE is_archive = FALSE;
CREATE INDEX IF NOT EXISTS gw_folder_time_created_folder_id_nonarchive_idx ON gw_folder(time_created DESC, folder_id DESC) WHERE  is_archive = FALSE;
CREATE INDEX IF NOT EXISTS gw_folder_resolution_comment_fts_idx ON gw_folder
  USING GIN (to_tsvector('english', resolution_comment));
CREATE INDEX IF NOT EXISTS gw_analyse_source_media_association_analyse_id_idx ON gw_analyse_source_media_association
    USING BTREE(analyse_id);
CREATE INDEX IF NOT EXISTS gw_folder_image_folder_id_idx ON gw_folder_image
    USING BTREE(folder_id);
CREATE INDEX IF NOT EXISTS gw_folder_video_folder_id_idx ON gw_folder_video
    USING BTREE(folder_id);
CREATE INDEX IF NOT EXISTS gw_analyse_abstract_folder_id ON gw_analyse_abstract
    USING BTREE(folder_id);
CREATE INDEX IF NOT EXISTS gw_analyse_result_image_media_association_id_idx ON gw_analyse_result_image
    USING BTREE(media_association_id);
CREATE INDEX IF NOT EXISTS gw_logging_event_session_time_created_idx ON gw_logging_event_session(time_created);
CREATE INDEX IF NOT EXISTS gw_logging_event_record_time_created_idx ON gw_logging_event_record(time_created);
CREATE INDEX IF NOT EXISTS gw_logging_event_record_session_id_idx ON gw_logging_event_record(session_id);
CREATE INDEX IF NOT EXISTS gw_logging_event_record_timemark_idx ON gw_logging_event_record(timemark);
\q
exit
exit
```

Restarting with new datas:
```sh
docker restart oz-api
```

## Additional instructions

### Nginx host's configuration example

*Notes. Use this configuration for Internet accessibility only.*

Put next block in section **``http``** of your **``nginx.conf``** file. Please, prepare your SSL keys before this operation.

```nginx
    server {
        listen 443 ssl http2 default_server;
        ssl_certificate "/etc/nginx/cert/fullchain.cer";
        ssl_certificate_key "/etc/nginx/cert/your-server-name.key";
        ssl_session_cache shared:SSL:1m;
        ssl_session_timeout  10m;
        ssl_ciphers HIGH:!aNULL:!MD5;
        ssl_prefer_server_ciphers on;

        client_max_body_size 50M;

    	sendfile on;
    	tcp_nopush on;
     	tcp_nodelay on;
    	keepalive_timeout 65;
    	types_hash_max_size 2048;

        include /etc/nginx/default.d/*.conf;

        location / {
            proxy_pass http://localhost:8000/;
            proxy_set_header X-Forwarded-For $remote_addr;
            proxy_set_header Host $http_host;
        }
    }
```

### Test API accessibility

Just open in your Internet browser address:
``https://your-server-name/api/version``

for testing via Internet, or

``http://your-server-name:8000/api/version``

for testing via local network

### Test with mobile application

1. Download Mobile Demo App from [DemoKit](https://ozforensics.com/ru/demokit).

2. Set your server address by domain name or IP address.
3. Use predefined login credentials:
   * login: ``demo@ozforensics.com``
   * password: ``123456``

Then, after logon, try to perform Selfie or any other gest.

Enjoy.

