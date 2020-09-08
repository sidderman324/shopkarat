<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет - Мои организации</title>

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
          <li><a href="lk-contragents.php" class="active"><span class="icon icon--contragents"></span>Мои организации</a></li>
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
        <h1 class="title">Мои организации</h1>

        <div class="row">
          <div class="column">

            <div class="head">
              <p class="text text--big text--bold">Контрагенты:</p>

              <p class="text text--big">ИП Ярцева Татьяна Николаевна (ИНН 230810118566)</p>
              <p class="text text--big">ООО ФК «КАРАТ» (ИНН 2311219293)</p>
            </div>

            <form action="" method="POST">
              <p class="block_title">Добавить контрагента</p>

              <div class="select">
                <input class="select_input" type="hidden" name="" id="">
                <div class="select_head">ФОРМА ЮРИДИЧЕСКОГО ЛИЦА</div>
                <ul class="select_list" style="display: none;">
                  <li class="select_item">ИП</li>
                  <li class="select_item">ООО</li>
                </ul>
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="Название компании">
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="Код ОКПО">
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="ИНН">
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="КПП">
              </div>

              <input type="submit" name="" value="ДОБАВИТЬ контрагента" class="btn btn--orange">

            </form>
          </div>
          <div class="column">

            <div class="head">
              <p class="text text--big text--bold">Пользователи:</p>
              <p class="text text--big">Ярцева Татьяна Николаевна (yarceva.@mail.ru)</p>
            </div>

            <form action="" method="POST">
              <p class="block_title">Добавить пользователя</p>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="Фамилия Имя Отчество">
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="Email">
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="Телефон">
              </div>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" name="" placeholder="Пароль">
              </div>

              <input type="submit" name="" value="Добавить пользователя" class="btn btn--orange">

            </form>


          </div>
        </div>

      </div>




    </div>
  </section>





  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>