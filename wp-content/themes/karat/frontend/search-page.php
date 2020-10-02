<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Результаты поиска</title>

  <link rel="stylesheet" href="/wp-content/themes/karat/static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>

  <section class="catalog catalog--search-page">

    <div class="container">
      <div class="catalog_item catalog_item--search-page">
        <h2 class="title">Результаты поиска</h2>


        <div class="sorting_block">
          <div class="select">
            <input class="select_input" type="hidden" name="" id="">
            <div class="select_head">Сортировать по:</div>
            <ul class="select_list" style="display: none;">
              <li class="select_item" data-value="sort_popular">Популярности</li>
              <li class="select_item" data-value="sort_name">Наименованию</li>
              <li class="select_item" data-value="sort_price_desc">Цена выше</li>
              <li class="select_item" data-value="sort_price_asc">Цена ниже</li>
            </ul>
          </div>

          <span class="filter_link js-filters-show">Фильтры</span>
        </div>

        <div class="catalog_card catalog_card--for-order">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_1.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
          <p class="catalog_card_status">Под заказ</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--in-stock catalog_card--sale-label">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_1.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
          <p class="catalog_card_status">В наличии</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
            <p class="price price--old">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-one-click-buy">Купить в 1 клик</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--soon-in-stock catalog_card--new-product-label">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_2.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Ваза бочонок "Тень" 38 см (4) (YAB-KR-19)</a>
          <p class="catalog_card_status catalog_card_status--in-stock">Скоро в продаже</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--in-stock">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_3.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Основание Для кровати (25*28) 900х1900 (Метал + деревянные ламели)</a>
          <p class="catalog_card_status">В наличии</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>

        <div class="catalog_card catalog_card--for-order">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_1.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
          <p class="catalog_card_status">Под заказ</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--in-stock catalog_card--sale-label">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_1.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
          <p class="catalog_card_status">В наличии</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
            <p class="price price--old">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-one-click-buy">Купить в 1 клик</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--soon-in-stock catalog_card--new-product-label">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_2.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Ваза бочонок "Тень" 38 см (4) (YAB-KR-19)</a>
          <p class="catalog_card_status catalog_card_status--in-stock">Скоро в продаже</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--in-stock">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_3.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Основание Для кровати (25*28) 900х1900 (Метал + деревянные ламели)</a>
          <p class="catalog_card_status">В наличии</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>

        <div class="catalog_card catalog_card--for-order">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_1.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
          <p class="catalog_card_status">Под заказ</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--in-stock catalog_card--sale-label">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_1.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
          <p class="catalog_card_status">В наличии</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
            <p class="price price--old">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-one-click-buy">Купить в 1 клик</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--soon-in-stock catalog_card--new-product-label">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_2.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Ваза бочонок "Тень" 38 см (4) (YAB-KR-19)</a>
          <p class="catalog_card_status catalog_card_status--in-stock">Скоро в продаже</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>
        <div class="catalog_card catalog_card--in-stock">
          <a href="catalog_card.php" class="img_wrapper">
            <img src="../static/imgs/catalog/product_3.jpg" alt="">
          </a>

          <a href="catalog_card.php" class="catalog_card_title">Основание Для кровати (25*28) 900х1900 (Метал + деревянные ламели)</a>
          <p class="catalog_card_status">В наличии</p>
          <p class="catalog_card_articul">Артикул № 3558</p>

          <div class="catalog_card_infoblock">
            <div class="rating">
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--full"></span>
              <span class="rating_star rating_star--empty"></span>
              <span class="rating_star rating_star--empty"></span>
            </div>
            <a href="#" class="link link--compare js-label-open" data-label-name="js-add-to-compare"><span class="icon icon--compare"></span></a>
            <a href="#" class="link link--favorite icon_count_box js-label-open" data-label-name="js-add-to-favorite"><span class="icon icon--favorite"></span></a>
          </div>


          <div class="catalog_card_price_block">
            <p class="price">4 507 руб/шт.</p>
          </div>


          <div class="catalog_card_amount_block">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--minus">-</p>
            <input type="text" class="amount_input" value="1">
            <p class="catalog_card_amount_btn catalog_card_amount_btn--plus">+</p>
          </div>


          <div class="catalog_card_btn_block">
            <a href="#" class="btn btn--orange btn--basket-icon js-label-open" data-label-name="js-add-to-basket">В корзину</a>
            <a href="#" class="btn btn--transparent btn--orange-border js-popup-open" data-popup-name="js-popup-pre-order">Предзаказ</a>
          </div>


        </div>




      </div>
    </div>

  </section>


  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
