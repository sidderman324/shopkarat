<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Корзина</title>

  <link rel="stylesheet" href="../static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

  <?php include ('./_include/header.php');?>


  <section class="basket">
    <div class="container">
      <h1 class="title">Корзина</h1>

      <section class="tabs">
        <div class="tabs_head">
          <p class="tabs_head_item active">ГОТОВЫЕ К ЗАКАЗУ (30)</p>
          <p class="tabs_head_item">ОТЛОЖЕННЫЕ (2)</p>
        </div>


        <div class="tabs_body">
          <div class="tabs_body_item active">
            <p class="title">ТОВАРЫ В НАЛИЧИИ:</p>
            <div class="table">
              <div class="table_head">
                <div class="table_row">
                  <div class="table_cell">Товары</div>
                  <div class="table_cell">Наименование</div>
                  <div class="table_cell">Количество</div>
                  <div class="table_cell">Скидка</div>
                  <div class="table_cell">Цена</div>
                  <div class="table_cell">Сумма</div>
                  <div class="table_cell"></div>
                </div>
              </div>

              <div class="table_body">
                <div class="table_row">
                  <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
                  <div class="table_cell">
                    <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                    <p class="text articul">Арт. 23265</p>
                  </div>
                  <div class="table_cell catalog_card">
                    <div class="catalog_card_amount_block">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
                      <input type="text" class="amount_input" value="1">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
                    </div>
                    <span>шт.</span>
                  </div>
                  <div class="table_cell">
                    <p class="text sale">0%</p>
                  </div>
                  <div class="table_cell">
                    <p class="text price">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <p class="total_price text">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <a href="#" class="icon icon--aside"></a>
                    <a href="#" class="icon icon--remove"></a>
                  </div>
                </div>
                <div class="table_row">
                  <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
                  <div class="table_cell">
                    <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                    <p class="text articul">Арт. 23265</p>
                  </div>
                  <div class="table_cell catalog_card">
                    <div class="catalog_card_amount_block">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
                      <input type="text" class="amount_input" value="1">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
                    </div>
                    <span>шт.</span>
                  </div>
                  <div class="table_cell">
                    <p class="text sale">0%</p>
                  </div>
                  <div class="table_cell">
                    <p class="text price">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <p class="total_price text">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <a href="#" class="icon icon--aside"></a>
                    <a href="#" class="icon icon--remove"></a>
                  </div>
                </div>
              </div>
            </div>


            <p class="title summary">ИТОГО ТОВАРЫ В НАЛИЧИИ: <span>10 544 руб.</span></p>




            <p class="title">ТОВАРЫ В ОЖИДАНИИ:</p>
            <div class="table">
              <div class="table_head">
                <div class="table_row">
                  <div class="table_cell">Товары</div>
                  <div class="table_cell">Наименование</div>
                  <div class="table_cell">Количество</div>
                  <div class="table_cell">Скидка</div>
                  <div class="table_cell">Цена</div>
                  <div class="table_cell">Сумма</div>
                  <div class="table_cell"></div>
                </div>
              </div>

              <div class="table_body">
                <div class="table_row">
                  <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
                  <div class="table_cell">
                    <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                    <p class="text articul">Арт. 23265</p>
                    <p class="text notification">* Товар на складе отсутствует, ожидается в течение 30 рабочих дней</p>
                  </div>
                  <div class="table_cell catalog_card">
                    <div class="catalog_card_amount_block">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
                      <input type="text" class="amount_input" value="1">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
                    </div>
                    <span>шт.</span>
                  </div>
                  <div class="table_cell">
                    <p class="text sale">0%</p>
                  </div>
                  <div class="table_cell">
                    <p class="text price">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <p class="total_price text">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <a href="#" class="icon icon--aside"></a>
                    <a href="#" class="icon icon--remove"></a>
                  </div>
                </div>
              </div>
            </div>


            <p class="title summary">ИТОГО ТОВАРЫ В НАЛИЧИИ: <span>10 544 руб.</span></p>


            <div class="total_summary">
              <p class="text">Введите промокод или номер дисконтной карты</p>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" placeholder="125698">
              </div>

              <a href="#" class="btn btn--transparent btn--orange-border">Применить</a>


              <div class="basket_total_price">
                ИТОГО: <span>15 822</span> руб.
              </div>
            </div>


            <div class="button_block">
              <a href="#" class="btn btn--transparent">очистить корзину</a>

              <a href="#" class="btn btn--orange btn--icon-arrow">ОФОРМИТЬ ЗАКАЗ</a>
            </div>



          </div>
          <div class="tabs_body_item">
            <div class="table">
              <div class="table_head">
                <div class="table_row">
                  <div class="table_cell">Товары</div>
                  <div class="table_cell">Наименование</div>
                  <div class="table_cell">Количество</div>
                  <div class="table_cell">Скидка</div>
                  <div class="table_cell">Цена</div>
                  <div class="table_cell">Сумма</div>
                  <div class="table_cell"></div>
                </div>
              </div>

              <div class="table_body">
                <div class="table_row">
                  <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
                  <div class="table_cell">
                    <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                    <p class="text articul">Арт. 23265</p>
                  </div>
                  <div class="table_cell catalog_card">
                    <div class="catalog_card_amount_block">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
                      <input type="text" class="amount_input" value="1">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
                    </div>
                    <span>шт.</span>
                  </div>
                  <div class="table_cell">
                    <p class="text sale">0%</p>
                  </div>
                  <div class="table_cell">
                    <p class="text price">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <p class="total_price text">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <a href="#" class="icon icon--move-basket"></a>
                    <a href="#" class="icon icon--remove"></a>
                  </div>
                </div>
                <div class="table_row">
                  <div class="table_cell"><div class="img_wrapper"><img src="../static/imgs/catalog/product_4.jpg" alt=""></div></div>
                  <div class="table_cell">
                    <p class="text name">Основание для кровати (25*28) 900х1900 (метал + деревянные ламели).</p>
                    <p class="text articul">Арт. 23265</p>
                  </div>
                  <div class="table_cell catalog_card">
                    <div class="catalog_card_amount_block">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
                      <input type="text" class="amount_input" value="1">
                      <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
                    </div>
                    <span>шт.</span>
                  </div>
                  <div class="table_cell">
                    <p class="text sale">0%</p>
                  </div>
                  <div class="table_cell">
                    <p class="text price">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <p class="total_price text">5 278 руб.</p>
                  </div>
                  <div class="table_cell">
                    <a href="#" class="icon icon--move-basket"></a>
                    <a href="#" class="icon icon--remove"></a>
                  </div>
                </div>
              </div>
            </div>


            <div class="total_summary total_summary--aside">
              <p class="text">Введите промокод или номер дисконтной карты</p>

              <div class="input_box input_box--square input_box--black">
                <input type="text" class="input_text" placeholder="125698">
              </div>

              <a href="#" class="btn btn--transparent btn--orange-border">Применить</a>


              <div class="basket_total_price">
                ИТОГО ОТЛОЖЕННЫЕ ТОВАРЫ: <span>15 822</span> руб.
              </div>
            </div>


            <div class="button_block">
              <a href="#" class="btn btn--transparent">очистить избранное</a>

              <a href="#" class="btn btn--orange"> ВСЕ ТОВАРЫ В КОРЗИНУ</a>
            </div>

          </div>
        </div>


      </section>


    </div>
  </section>






  <?php include ('./_include/footer.php');?>


</body>
</html>
