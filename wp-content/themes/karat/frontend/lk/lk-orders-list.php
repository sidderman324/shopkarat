<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет - Мои заказы</title>

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
          <li><a href="#"><span class="icon icon--contragents"></span>Мои организации</a></li>
          <li><a href="#"><span class="icon icon--otguzka"></span>Отгрузить заказы</a></li>
          <li><a href="#"><span class="icon icon--price"></span>Скачать прайс</a></li>
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
        <h1 class="title">Мои заказы</h1>

        <table class="specifications specifications--orders specifications--border-head" cellspacing="0">
          <thead>
            <tr>
              <td>Заказ</td>
              <td>Дата</td>
              <td>Сумма к оплате</td>
              <td>Статус</td>
              <td>Организация</td>
              <td>Оплата</td>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="payment_table_btn">ОПЛАТИТЬ КАРТОЙ</a></td>
            </tr>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="payment_table_btn">ОПЛАТИТЬ СЧЕТ</a></td>
            </tr>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="disable payment_table_btn">ОПЛАТА НАЛИЧНЫМИ</a></td>
            </tr>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="payment_table_btn">ОПЛАТИТЬ КАРТОЙ</a></td>
            </tr>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="disable payment_table_btn">ОПЛАТА НАЛИЧНЫМИ</a></td>
            </tr>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="payment_table_btn">ОПЛАТИТЬ СЧЕТ</a></td>
            </tr>
            <tr>
              <td class="text">
                <div class="burger_wrapper js-order-more-label"><div class="burger"></div></div> 2263
                <div class="more_info_label">
                  <a href="lk-order-item.php">Подробнее о заказе</a>
                  <a href="#">Повторить заказ</a>
                </div>
              </td>
              <td class="text">22.06.2020</td>
              <td class="text">12 050 руб.</td>
              <td class="text">Принят</td>
              <td class="text">ИП Ярцева Татьяна Николаевна</td>
              <td class="text table_btn"><a href="#" class="disable payment_table_btn">ОПЛАТА НАЛИЧНЫМИ</a></td>
            </tr>
          </tbody>
        </table>

        <div class="pagination">
          <p class="name">Страницы:</p>
          <div class="pagintaion_page_block">
            <a href="#" class="pagination_arrow pagination_arrow--prev"></a>
            <a href="#" class="pagintaion_page_link pagintaion_page_link--active">1</a>
            <a href="#" class="pagintaion_page_link">2</a>
            <a href="#" class="pagintaion_page_link">3</a>
            <a href="#" class="pagintaion_page_link">4</a>
            <a href="#" class="pagintaion_page_link">5</a>
            <a href="#" class="pagination_arrow pagination_arrow--next"></a>
          </div>
        </div>
      </div>




    </div>
  </section>





  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
