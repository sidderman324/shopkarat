<footer class="page-footer">

  <div class="container">
    <div class="footer_menu_block">
      <div class="footer_menu_block_item">
        <p class="title">КАТАЛОГ</p>
        <ul class="footer_menu_block_list">
          <li><a href="#">Декоры мебельные</a></li>
          <li><a href="#">Кромочные материалы</a></li>
          <li><a href="#">Мойки и смесители</a></li>
          <li><a href="#">Мебельная фурнитура</a></li>
          <li><a href="#">Плитные материалы</a></li>
          <li><a href="#">Шкафы-купе</a></li>
          <li><a href="#">Фасады</a></li>
        </ul>
      </div>
      <div class="footer_menu_block_item">
        <p class="title">УСЛУГИ</p>
        <ul class="footer_menu_block_list">
          <li><a href="#">Распил и кромление</a></li>
          <li><a href="#">Присадка</a></li>
          <li><a href="#">Фрезеровка</a></li>
          <li><a href="#">Мебельное производство</a></li>
          <li><a href="#">Производство фасадов</a></li>
        </ul>
      </div>
      <div class="footer_menu_block_item">
        <p class="title">УСЛОВИЯ</p>
        <ul class="footer_menu_block_list">
          <li><a href="payment_delivery.php">Доставка</a></li>
          <li><a href="payment_delivery.php">Оплата</a></li>
          <li><a href="payment_delivery.php">Гарантия</a></li>
          <li><a href="payment_delivery.php">Помощь</a></li>
        </ul>
      </div>
      <div class="footer_menu_block_item">
        <p class="title">ФИЛИАЛЫ</p>
        <ul class="footer_menu_block_list">
          <li><a href="#">Армавир</a></li>
          <li><a href="#">Симферополь</a></li>
          <li><a href="#">Сочи</a></li>
        </ul>
      </div>
    </div>


    <div class="footer_bottom_block">
      <div class="logo_wrapper"><img src="/wp-content/themes/karat/static/imgs/main_logo_orange.svg" alt=""></div>

      <div class="phonebox">
        <a href="tel:+78612050519" class="phone_header">8(861)205-05-19</a>
        <a href="tel:+78612050592" class="phone_header">8(861)205-05-92</a>
      </div>
    </div>

  </div>

</footer>

<!-- Окно покупки в 1 клик -->
<div class="popup_block js-popup-one-click-buy">
  <span class="close_btn js-popup-close"></span>

  <form action="" method="POST">
    <p class="popup_title">Купить в 1 клик</p>

    <div class="input_box input_box--square input_box--black input_box--narrow">
      <input type="text" class="input_text" placeholder="Фамилия Имя Отчество">
    </div>
    <div class="input_box input_box--square input_box--black input_box--narrow">
      <input type="text" class="input_text" placeholder="Email">
    </div>
    <div class="input_box input_box--square input_box--black input_box--narrow">
      <input type="text" class="input_text" placeholder="Телефон">
    </div>

    <div class="input_box input_box--square input_box--black">
      <textarea name="name" placeholder="Комментарий" rows="5" class="input_text input_text--textarea"></textarea>
    </div>

    <div class="custom_checkbox custom_checkbox--square custom_checkbox--square-left">
      <input id="confirmation_buy" type="checkbox">
      <label for="confirmation_buy" name="confirmation_buy"><span>Я согласен на <a href="#"> обработку персональных данных</a></span></label>
    </div>

    <button class="btn btn--orange">ОТПРАВИТЬ</button>
  </form>

</div>


<!-- Окно оформления предзаказа -->
<div class="popup_block popup_block--wide js-popup-pre-order">
  <span class="close_btn js-popup-close"></span>

  <form action="" method="POST" class="ordering ordering--popup">
    <p class="popup_title">Оформление предзаказа</p>

    <p class="text">Выберите необходимые пункты и заполните пустые поля</p>

    <div class="row">
      <div class="column">
        <div class="block">
          <p class="block_title">Тип плательщика</p>

          <div class="content">
            <div class="custom_checkbox custom_checkbox--square">
              <input id="order_fiz_type_pre" name="order_type" type="radio" class="checkout_type">
              <label for="order_fiz_type_pre" name="order_fiz_type_pre"><span>ФИЗИЧЕСКОЕ ЛИЦО</span></label>
            </div>
            <div class="custom_checkbox custom_checkbox--square">
              <input id="order_yur_type_pre" name="order_type" type="radio" class="checkout_type">
              <label for="order_yur_type_pre" name="order_yur_type_pre"><span>ЮРИДИЧЕСКОЕ ЛИЦО</span></label>
            </div>
          </div>

        </div>

        <div class="block">
          <p class="block_title">Доставка</p>
          <div class="content">

            <div class="custom_checkbox custom_checkbox--square">
              <input id="courier_delivery_pre" name="delivery_type" type="radio" class="checkout_type">
              <label for="courier_delivery_pre" name="courier_delivery_pre"><span>ДОСТАВКА КУРЬЕРОМ</span></label>
            </div>

            <div class="hidden_block delivery_type" id="content_courier_delivery_pre">
              <div class="input_box input_box--black input_box--square">
                <input type="text" class="input_text" placeholder="Введите название Вашего города">
              </div>
              <div class="input_box input_box--black input_box--square">
                <input type="text" class="input_text" placeholder="Индекс">
              </div>
              <div class="input_box input_box--black input_box--square">
                <textarea type="text" class="input_text input_text--textarea" placeholder="Адрес доставки"></textarea>
              </div>

              <p class="notification">* Бесплатная доставка при закае от 3 000 руб.</p>
            </div>




            <div class="custom_checkbox custom_checkbox--square">
              <input id="selfcarry_delivery_pre" name="delivery_type" type="radio" class="checkout_type">
              <label for="selfcarry_delivery_pre" name="selfcarry_delivery_pre"><span>САМОВЫВОЗ</span></label>
            </div>


            <div class="hidden_block delivery_type" id="content_selfcarry_delivery_pre">
              <div class="select">
                <input class="select_input" type="hidden" name="" id="">
                <div class="select_head">Выберите ближайший к Вам филиал</div>
                <ul class="select_list" style="display: none;">
                  <li class="select_item" data-value="Краснодар">Краснодар</li>
                  <li class="select_item" data-value="Симферополь">Симферополь</li>
                  <li class="select_item" data-value="Армавир">Армавир</li>
                  <li class="select_item" data-value="Сочи">Сочи</li>
                </ul>
              </div>
            </div>


          </div>
        </div>


        <div class="block">
          <p class="block_title">Способ оплаты</p>

          <div class="content">
            <div class="custom_checkbox custom_checkbox--square">
              <input id="payment_cash_pre" name="payment_type" type="radio">
              <label for="payment_cash_pre" name="payment_cash_pre"><span>НАЛИЧНЫМИ ПРИ ПОЛУЧЕНИИ</span></label>
            </div>
            <div class="custom_checkbox custom_checkbox--square">
              <input id="paument_card_pre" name="payment_type" type="radio">
              <label for="paument_card_pre" name="paument_card_pre"><span>БАНКОВСКОЙ КАРТОЙ</span></label>
            </div>
            <div class="custom_checkbox custom_checkbox--square">
              <input id="payment_checko_preut" name="payment_type" type="radio">
              <label for="payment_checko_preut" name="payment_checkout_pre"><span>ПО СЧЕТУ</span></label>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="hidden_block order_type" id="content_order_fiz_type_pre">
          <p class="block_title">Покупатель</p>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Фамилия Имя Отчество">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Email">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Телефон">
          </div>
          <div class="input_box input_box--black input_box--square">
            <textarea type="text" class="input_text input_text--textarea" placeholder="Комментарий к заказу"></textarea>
          </div>
        </div>
        <div class="hidden_block order_type" id="content_order_yur_type_pre">
          <p class="block_title">Покупатель</p>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Название компании">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Юридический адрес">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="ИНН">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="КПП">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Контактное лицо">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Телефон">
          </div>
          <div class="input_box input_box--black input_box--square">
            <input type="text" class="input_text" placeholder="Email">
          </div>
          <div class="input_box input_box--black input_box--square">
            <textarea type="text" class="input_text input_text--textarea" placeholder="Комментарий к заказу"></textarea>
          </div>
        </div>


      </div>
    </div>

    <div class="custom_checkbox custom_checkbox--square custom_checkbox--square-left">
      <input id="confirmation_pre_order" type="checkbox">
      <label for="confirmation_pre_order" name="confirmation_pre_order"><span>Я согласен на <a href="#"> обработку персональных данных</a></span></label>
    </div>

    <button class="btn btn--orange">ОТПРАВИТЬ</button>
  </form>

</div>


<!-- Окно благодарности за подписку -->
<div class="popup_block js-popup-subsribe popup_block--subsribe popup_block--wide">
  <span class="close_btn js-popup-close"></span>

  <p class="popup_title">Спасибо за подписку!</p>

  <p class="text bold">Ваш e-mail принят. Теперь вы будете первыми получать информацию о новинках и акциях в наших магазинах!</p>
</div>


<div class="popup_bgr js-popup-close"></div>


<!-- Ответ при добавлении в корзину -->
<div class="info_label_box js-add-to-basket">В списке 10 товаров в <a href="/wp-content/themes/karat/frontend/basket.php" target="_blank">Корзину</a></div>

<!-- Ответ при добавлении в сравнение -->
<div class="info_label_box js-add-to-compare">В списке 5 товаров <a href="#" target="_blank">Сравнить</a></div>

<!-- Ответ при добавлении в избранное -->
<div class="info_label_box js-add-to-favorite">В <a href="#" target="_blank">избранном</a> 5 товаров</div>


<!-- <script src="/static/js/jquery-3.1.1.js"></script> -->
<!-- <script src="/static/js/jquery-migrate-1.4.1.min.js"></script> -->
<!-- <script src="/static/js/toastr.min.js"></script> -->
<!-- <script src="/static/js/input.mask.bundle.min.js"></script> -->
<!-- <script src="/static/js/swiper.js"></script> -->
<!-- <script src="/static/js/script.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->


<script src="/wp-content/themes/karat/static/js/script.min.js?v=<?php echo time(); ?>"></script>
