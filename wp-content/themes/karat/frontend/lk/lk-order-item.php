<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет - Информация о заказе</title>

  <link rel="stylesheet" href="/wp-content/themes/karat/static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>


  <section class="lk_module">
    <div class="container">

      <div class="sidebar_menu">
        <p class="block_title">ЛИЧНЫЙ КАБИНЕТ</p>

        <ul class="sidebar_menu_list">
          <li><a href="lk-orders-list.php" class="active"><span class="icon icon--orders"></span>Мои заказы</a></li>
          <li><a href="lk-profile-settings.php"><span class="icon icon--reg_data"></span>Регистрационные данные</a></li>
          <li><a href="lk-contragents.php"><span class="icon icon--contragents"></span>Мои организации</a></li>
          <li><a href="lk-order-shipment.php"><span class="icon icon--otguzka"></span>Отгрузить заказы</a></li>
          <li><a href="lk-download-prices.php"><span class="icon icon--price"></span>Скачать прайс</a></li>
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
        <h1 class="title">Информация о заказе</h1>

        <div class="row">

          <table class="specifications specifications--narrow specifications--border-head" cellspacing="0">
            <tbody>
              <tr>
                <td class="text text--orange text--bold text--big">Заказ № 5220 от 22.06.2020</td>
              </tr>
              <tr>
                <td class="text">
                  <span>Сумма:</span>
                  <span>12 050 руб.</span>
                </td>
                <td class="text">
                  <span>Адрес доставки:</span>
                  <span>г. Москва, ул. Степная, дом 5, кв 32.</span>
                </td>
              </tr>
              <tr>
                <td class="text">
                  <span>Статус:</span>
                  <span>Отправлен</span>
                </td>
                <td class="text">
                  <span>Доставка:</span>
                  <span>Курьером</span>
                </td>
              </tr>

            </tbody>
          </table>


          <div class="button_block row">
            <a href="#" class="btn btn--orange">повторить заказ</a>
            <a href="#" class="btn btn--transparent">удалить заказ</a>
          </div>


        </div>


        <table class="specifications specifications--orders specifications--orders-inner specifications--border-head specifications--bottom-left" cellspacing="0">
          <thead>
            <tr>
              <td>Наименование</td>
              <td>Артикул</td>
              <td>Количество</td>
              <td>Стоимость</td>
              <td>Скидка</td>
              <td>Итого</td>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text">Кант алюминиевый С16 матовое серебро 2,7м красивый очень невыносимо</td>
              <td class="text">Артикул: 14842</td>
              <td class="text">16 шт.</td>
              <td class="text">127, 50 руб.</td>
              <td class="text">20 %</td>
              <td class="text">2040 руб.</td>
            </tr>
            <tr>
              <td class="text">Кант алюминиевый С16 матовое серебро 2,7м красивый очень невыносимо</td>
              <td class="text">Артикул: 14842</td>
              <td class="text">16 шт.</td>
              <td class="text">127, 50 руб.</td>
              <td class="text">20 %</td>
              <td class="text">2040 руб.</td>
            </tr>
            <tr>
              <td class="text">Кант алюминиевый С16 матовое серебро 2,7м красивый очень невыносимо</td>
              <td class="text">Артикул: 14842</td>
              <td class="text">16 шт.</td>
              <td class="text">127, 50 руб.</td>
              <td class="text">20 %</td>
              <td class="text">2040 руб.</td>
            </tr>
            <tr>
              <td class="text">Кант алюминиевый С16 матовое серебро 2,7м красивый очень невыносимо</td>
              <td class="text">Артикул: 14842</td>
              <td class="text">16 шт.</td>
              <td class="text">127, 50 руб.</td>
              <td class="text">20 %</td>
              <td class="text">2040 руб.</td>
            </tr>
          </tbody>
        </table>

        <table class="specifications specifications--border-head specifications--order-summary" cellspacing="0">
          <tr>
            <td class="text text--orange text--bold text--big">Ваш заказ:</td>
          </tr>
          <tr>
            <td class="text text--bold">Количество:</td>
            <td class="text text--bold">342 шт.</td>
          </tr>
          <tr>
            <td class="text text--bold">Сумма:</td>
            <td class="text text--bold">502 222 руб.</td>
          </tr>
          <tr>
            <td class="text text--bold">НДС:</td>
            <td class="text text--bold">152, 52  руб.</td>
          </tr>
          <tr>
            <td class="text text--bold">Вес:</td>
            <td class="text text--bold">25 кг.</td>
          </tr>
          <tr>
            <td class="text text--bold">Доставка:</td>
            <td class="text text--bold">0 руб.</td>
          </tr>
          <tr class="orange_bgr">
            <td class="text text--bold">ИТОГО:</td>
            <td class="text text--bold">502 222 руб.</td>
          </tr>
        </table>

      </div>




    </div>
  </section>





  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
