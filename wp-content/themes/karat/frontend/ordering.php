<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Оформление заказа</title>

  <link rel="stylesheet" href="/wp-content/themes/karat/static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>


  <section class="ordering">
    <div class="container">
      <h1 class="title">Оформление заказа</h1>


      <div class="odrer_summary">
        <table class="specifications specifications--border-head specifications--order-summary" cellspacing="0">
          <tr>
            <td class="text text--orange text--bold text--big">Ваш заказ:</td>
          </tr>
          <tr>
            <td class="text text--bold">Товаров на: </td>
            <td class="text text--bold">10 544 руб.</td>
          </tr>
          <tr>
            <td class="text text--bold">Общий вес:</td>
            <td class="text text--bold">12, 56 кг.</td>
          </tr>
          <tr>
            <td class="text text--bold">Сумма НДС (20%):</td>
            <td class="text text--bold">205, 36 руб.</td>
          </tr>
          <tr>
            <td class="text text--bold">Доставка:</td>
            <td class="text text--bold">БЕСПЛАТНО</td>
          </tr>
          <tr class="orange_bgr">
            <td class="text text--bold">ИТОГО:</td>
            <td class="text text--bold">10 544 руб.</td>
          </tr>
        </table>
      </div>

      <form action="" method="POST">

        <div class="row">
          <div class="column">
            <div class="block">
              <p class="block_title">Тип плательщика</p>

              <div class="content">
                <div class="custom_checkbox custom_checkbox--square">
                  <input id="order_fiz_type" name="order_type" type="radio" class="checkout_type">
                  <label for="order_fiz_type" name="order_fiz_type"><span>ФИЗИЧЕСКОЕ ЛИЦО</span></label>
                </div>
                <div class="custom_checkbox custom_checkbox--square">
                  <input id="order_yur_type" name="order_type" type="radio" class="checkout_type">
                  <label for="order_yur_type" name="order_yur_type"><span>ЮРИДИЧЕСКОЕ ЛИЦО</span></label>
                </div>
              </div>

            </div>

            <div class="block">
              <p class="block_title">Доставка</p>
              <div class="content">

                <div class="custom_checkbox custom_checkbox--square">
                  <input id="courier_delivery" name="delivery_type" type="radio" class="checkout_type">
                  <label for="courier_delivery" name="courier_delivery"><span>ДОСТАВКА КУРЬЕРОМ</span></label>
                </div>

                <div class="hidden_block delivery_type" id="content_courier_delivery">
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
                  <input id="selfcarry_delivery" name="delivery_type" type="radio" class="checkout_type">
                  <label for="selfcarry_delivery" name="selfcarry_delivery"><span>САМОВЫВОЗ</span></label>
                </div>


                <div class="hidden_block delivery_type" id="content_selfcarry_delivery">
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
                  <input id="payment_cash" name="payment_type" type="radio">
                  <label for="payment_cash" name="payment_cash"><span>НАЛИЧНЫМИ ПРИ ПОЛУЧЕНИИ</span></label>
                </div>
                <div class="custom_checkbox custom_checkbox--square">
                  <input id="paument_card" name="payment_type" type="radio">
                  <label for="paument_card" name="paument_card"><span>БАНКОВСКОЙ КАРТОЙ</span></label>
                </div>
                <div class="custom_checkbox custom_checkbox--square">
                  <input id="payment_checkout" name="payment_type" type="radio">
                  <label for="payment_checkout" name="payment_checkout"><span>ПО СЧЕТУ</span></label>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="hidden_block order_type" id="content_order_fiz_type">
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
            <div class="hidden_block order_type" id="content_order_yur_type">
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

        <p class="subtitle-mix">Товары в заказе</p>

        <div class="table">
          <div class="table_head">
            <div class="table_row">
              <div class="table_cell">Товары</div>
              <div class="table_cell">Наименование</div>
              <div class="table_cell">Количество</div>
              <div class="table_cell">Скидка</div>
              <div class="table_cell">Вес</div>
              <div class="table_cell">Сумма</div>
            </div>
          </div>

          <div class="table_body">
            <div class="table_row">
              <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
              <div class="table_cell">
                <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                <p class="text articul">Арт. 23265</p>
              </div>
              <div class="table_cell catalog_card">2 шт</div>
              <div class="table_cell">
                <p class="text sale">0%</p>
              </div>
              <div class="table_cell">
                <p class="text price">5 278 руб.</p>
              </div>
              <div class="table_cell">
                <p class="total_price text">5 278 руб.</p>
              </div>

            </div>
            <div class="table_row">
              <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
              <div class="table_cell">
                <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                <p class="text articul">Арт. 23265</p>
              </div>
              <div class="table_cell catalog_card">2 шт</div>
              <div class="table_cell">
                <p class="text sale">0%</p>
              </div>
              <div class="table_cell">
                <p class="text price">5 278 руб.</p>
              </div>
              <div class="table_cell">
                <p class="total_price text">5 278 руб.</p>
              </div>

            </div>
            <div class="table_row">
              <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
              <div class="table_cell">
                <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                <p class="text articul">Арт. 23265</p>
              </div>
              <div class="table_cell catalog_card">2 шт</div>
              <div class="table_cell">
                <p class="text sale">0%</p>
              </div>
              <div class="table_cell">
                <p class="text price">5 278 руб.</p>
              </div>
              <div class="table_cell">
                <p class="total_price text">5 278 руб.</p>
              </div>

            </div>
          </div>
        </div>


        <input type="submit" name="" value="оформить  заказ" class="btn btn--orange">


        <p class="notification">*  Оформленный заказ Вы можете оплатить позже в разделе <a href="">"Мои заказы"</a></p>



      </form>

    </div>
  </section>






  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
