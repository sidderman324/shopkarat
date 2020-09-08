<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет - Скачать актуальный прайс</title>

  <link rel="stylesheet" href="/wp-content/themes/karat/static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>


  <section class="lk_module">
    <div class="container">

      <div class="sidebar_menu">
        <p class="block_title">ЛИЧНЫЙ КАБИНЕТ</p>

        <ul class="sidebar_menu_list">
          <li><a href="lk-orders-list.php"><span class="icon icon--orders"></span>Мои заказы</a></li>
          <li><a href="lk-profile-settings.php"><span class="icon icon--reg_data"></span>Регистрационные данные</a></li>
          <li><a href="lk-contragents.php"><span class="icon icon--contragents"></span>Мои организации</a></li>
          <li><a href="lk-order-shipment.php"><span class="icon icon--otguzka"></span>Отгрузить заказы</a></li>
          <li><a href="lk-download-prices.php" class="active"><span class="icon icon--price"></span>Скачать прайс</a></li>
          <li><a href="#"><span class="icon icon--reclamation"></span>Отправить рекламацию</a></li>
        </ul>
      </div>

      <div class="manager_info">
        <p class="text text--gray">
          <span class="text--underline">Ваши персональные менеджеры:</span>
          <span class="text--bold">Екатерина Максимчук</span>
        </p>

        <p class="text text--gray text--bold">
          <a href="tel:+79288816204">8 (928) 881 62 04</a>

          <a href="mailto:maksimchuk.e@mebelfur.ru">maksimchuk.e@mebelfur.ru</a>
        </p>
      </div>



      <div class="lk_content">
        <h1 class="title">Скачать актуальный прайс</h1>

        <div class="row">
          <div class="column">
            <a href="#" class="btn btn--download btn--download-excel">декоры мебельные</a>
            <a href="#" class="btn btn--download btn--download-excel">плиточные материалы</a>
            <a href="#" class="btn btn--download btn--download-excel">мебельная фурнитура</a>
            <a href="#" class="btn btn--download btn--download-excel">фасады</a>
          </div>
        </div>
      </div>




    </div>
  </section>





  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
