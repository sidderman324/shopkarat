<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты</title>

  <link rel="stylesheet" href="/wp-content/themes/karat/static/css/style.css?v=<?php echo time(); ?>">
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

</head>
<body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>


  <section class="contacts">
    <div class="container">
      <h1 class="title">Контакты</h1>

      <div class="row">
        <div class="adress_text">
          <p class="item">
            <span class="type">Адрес:</span>
            <span class="text">г. Краснодар, ул. Круговая 24/10</span>
          </p>
          <p class="item">
            <span class="type">Телефон:</span>
            <span class="text">
              <a href="tel:+78612050519">8 (861) 205-05-19</a><br>
              <a href="tel:+78612050592">8 (861) 205-05-92</a><br>
              <a href="tel:+79282083512">8 (928) 208-35-12</a>
            </span>
          </p>
          <p class="item">
            <span class="type">Email:</span>
            <span class="text"><a href="mailto:oap_karat@mebelfur.ru">oap_karat@mebelfur.ru</a></span>
          </p>
          <p class="item">
            <span class="type">Режим работы:</span>
            <span class="text">Пн - Пт: 9.00 - 18.00<br>Сб - Вс: выходные</span>
          </p>
        </div>

        <div id="krasnodar_map" class="map"></div>
      </div>
      <div class="row">
        <div class="adress_text">
          <p class="item">
            <span class="type">Адрес:</span>
            <span class="text">г. Армавир, ул. Кропоткина, 147 А</span>
          </p>
          <p class="item">
            <span class="type">Телефон:</span>
            <span class="text"><a href="tel:+79182772945">8 (918) 277-29-45</a></span>
          </p>
          <p class="item">
            <span class="type">Email:</span>
            <span class="text"><a href="mailto:armavir@mebelfur.ru">armavir@mebelfur.ru</a></span>
          </p>
          <p class="item">
            <span class="type">Режим работы:</span>
            <span class="text">Пн - Пт: 08.00 - 17.00<br>Сб: 09.00 - 14.00<br>Вс: выходной</span>
          </p>
        </div>

        <div id="armavir_map" class="map"></div>
      </div>
      <div class="row">
        <div class="adress_text">
          <p class="item">
            <span class="type">Адрес:</span>
            <span class="text">г. Сочи, ул. Пластунская, 50/1</span>
          </p>
          <p class="item">
            <span class="type">Телефон:</span>
            <span class="text"><a href="tel:+79883612844">8 (988) 361-28-44</a></span>
          </p>
          <p class="item">
            <span class="type">Email:</span>
            <span class="text"><a href="mailto:sochi@mebelfur.ru">sochi@mebelfur.ru</a></span>
          </p>
          <p class="item">
            <span class="type">Режим работы:</span>
            <span class="text">Пн - Пт: 08.00 - 17.00<br>Сб: 09.00 - 15.00<br>Вс: выходной</span>
          </p>
        </div>

        <div id="sochi_map" class="map"></div>
      </div>
      <div class="row">
        <div class="adress_text">
          <p class="item">
            <span class="type">Адрес:</span>
            <span class="text">Республика Крым, г. Симферополь, ул. Буденного, 32</span>
          </p>
          <p class="item">
            <span class="type">Телефон:</span>
            <span class="text"><a href="tel:+79788748140">8 (978) 874-81-40</a><a href="tel:+79788962240">8 (978) 896-22-40</a></span>
          </p>
          <p class="item">
            <span class="type">Email:</span>
            <span class="text"><a href="mailto:simferopol@mebelfur.ru">simferopol@mebelfur.ru</a></span>
          </p>
          <p class="item">
            <span class="type">Режим работы:</span>
            <span class="text">Пн - Пт: 08.00 - 17.00<br>Сб: 08.00 - 14.00<br>Вс: выходной</span>
          </p>
        </div>

        <div id="simferopol_map" class="map"></div>
      </div>
    </div>
  </section>




<?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
