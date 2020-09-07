<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет - Регистрационные данные</title>

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
          <li><a href="lk-profile-settings.php" class="active"><span class="icon icon--reg_data"></span>Регистрационные данные</a></li>
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
      <h1 class="title">Профиль пользователя</h1>

      <form action="" method="POST">
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
          <input type="text" class="input_text" name="" placeholder="Новый пароль">
        </div>
        <div class="input_box input_box--square input_box--black">
          <input type="text" class="input_text" name="" placeholder="Подтверждение пароля">
        </div>


        <input type="submit" name="" value="Сохранить изменения" class="btn btn--orange">

      </form>
    </div>




    </div>
  </section>





  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
