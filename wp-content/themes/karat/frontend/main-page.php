<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>

	<link rel="stylesheet" href="../static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

	<?php include ('./_include/header.php');?>


	<section class="promo_slider">
		<div class="swiper-container" id="mainPagePromoSlider">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url('../static/imgs/promo_slider_img_1.jpg');">
					<div class="container">
						<div class="text_box">
							<p class="title">Просыпайтесь <br>отдохнувшими!</p>
							<p class="subtitle">Матрац “Comfort” 800х1900х18</p>
						</div>

						<a href="#" class="btn btn--orange btn--white-border btn--icon-arrow">УЗНАТЬ ПОДРОБНЕЕ</a>
					</div>
				</div>
				<div class="swiper-slide" style="background-image: url('../static/imgs/promo_slider_img_1.jpg');">
					<div class="container">
						<div class="text_box">
							<p class="title">Просыпайтесь <br>отдохнувшими!</p>
							<p class="subtitle">Матрац “Comfort” 800х1900х18</p>
						</div>

						<a href="#" class="btn btn--orange btn--white-border btn--icon-arrow">УЗНАТЬ ПОДРОБНЕЕ</a>
					</div>
				</div>
				<div class="swiper-slide" style="background-image: url('../static/imgs/promo_slider_img_1.jpg');">
					<div class="container">
						<div class="text_box">
							<p class="title">Просыпайтесь <br>отдохнувшими!</p>
							<p class="subtitle">Матрац “Comfort” 800х1900х18</p>
						</div>

						<a href="#" class="btn btn--orange btn--white-border btn--icon-arrow">УЗНАТЬ ПОДРОБНЕЕ</a>
					</div>
				</div>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</section>



	<section class="catalog">
		<div class="container">
			<h2 class="title">Популярные товары</h2>

			<div class="catalog_item catalog_item--popular">
				<div class="swiper-container" id="catalogPopularSlider">
					<div class="swiper-wrapper">
						<div class="swiper-slide catalog_card">
							<a href="catalog_card.php" class="img_wrapper">
								<img src="../static/imgs/catalog/product_1.jpg" alt="">
							</a>

							<a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
							<p class="catalog_card_status catalog_card_status--for-order">Под заказ</p>
							<p class="catalog_card_articul">Артикул № 3558</p>

							<div class="catalog_card_infoblock">
								<div class="rating">
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--empty"></span>
									<span class="rating_star rating_star--empty"></span>
								</div>
								<a href="#" class="link link--compare"><span class="icon icon--compare"></span></a>
								<a href="#" class="link link--favorite icon_count_box"><span class="icon icon--favorite"></span></a>
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
								<a href="#" class="btn btn--orange btn--basket-icon">В корзину</a>
								<a href="#" class="btn btn--transparent btn--orange-border">Предзаказ</a>
							</div>


						</div>
						<div class="swiper-slide catalog_card">
							<a href="catalog_card.php" class="img_wrapper">
								<img src="../static/imgs/catalog/product_1.jpg" alt="">
							</a>

							<a href="catalog_card.php" class="catalog_card_title">Опора регулируемая D=6 подпятник вкручиваемый</a>
							<p class="catalog_card_status catalog_card_status--for-order">Под заказ</p>
							<p class="catalog_card_articul">Артикул № 3558</p>

							<div class="catalog_card_infoblock">
								<div class="rating">
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--empty"></span>
									<span class="rating_star rating_star--empty"></span>
								</div>
								<a href="#" class="link link--compare"><span class="icon icon--compare"></span></a>
								<a href="#" class="link link--favorite icon_count_box"><span class="icon icon--favorite"></span></a>
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
								<a href="#" class="btn btn--orange btn--basket-icon">В корзину</a>
								<a href="#" class="btn btn--transparent btn--orange-border">Предзаказ</a>
							</div>


						</div>
						<div class="swiper-slide catalog_card">
							<a href="catalog_card.php" class="img_wrapper">
								<img src="../static/imgs/catalog/product_2.jpg" alt="">
							</a>

							<a href="catalog_card.php" class="catalog_card_title">Ваза бочонок "Тень" 38 см (4) (YAB-KR-19)</a>
							<p class="catalog_card_status catalog_card_status--in-stock">В наличии</p>
							<p class="catalog_card_articul">Артикул № 3558</p>

							<div class="catalog_card_infoblock">
								<div class="rating">
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--empty"></span>
									<span class="rating_star rating_star--empty"></span>
								</div>
								<a href="#" class="link link--compare"><span class="icon icon--compare"></span></a>
								<a href="#" class="link link--favorite icon_count_box"><span class="icon icon--favorite"></span></a>
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
								<a href="#" class="btn btn--orange btn--basket-icon">В корзину</a>
								<a href="#" class="btn btn--transparent btn--orange-border">Предзаказ</a>
							</div>


						</div>
						<div class="swiper-slide catalog_card">
							<a href="catalog_card.php" class="img_wrapper">
								<img src="../static/imgs/catalog/product_3.jpg" alt="">
							</a>

							<a href="catalog_card.php" class="catalog_card_title">Основание Для кровати (25*28) 900х1900 (Метал + деревянные ламели)</a>
							<p class="catalog_card_status catalog_card_status--for-order">Скоро в продаже</p>
							<p class="catalog_card_articul">Артикул № 3558</p>

							<div class="catalog_card_infoblock">
								<div class="rating">
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--full"></span>
									<span class="rating_star rating_star--empty"></span>
									<span class="rating_star rating_star--empty"></span>
								</div>
								<a href="#" class="link link--compare"><span class="icon icon--compare"></span></a>
								<a href="#" class="link link--favorite icon_count_box"><span class="icon icon--favorite"></span></a>
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
								<a href="#" class="btn btn--orange btn--basket-icon">В корзину</a>
								<a href="#" class="btn btn--transparent btn--orange-border">Предзаказ</a>
							</div>


						</div>
					</div>

				</div>
			</div>

			<div class="swiper-button-prev catalogPopularSlider-prev"></div>
			<div class="swiper-button-next catalogPopularSlider-next"></div>

		</div>
	</section>




	<section class="advantages">
		<div class="container">
			<h2 class="title">Наши преимущества</h2>

			<div class="advantages_wrapper">
				<div class="advantage_item">
					<div class="advantage_icon"><img src="../static/imgs/advantages/advantage_1.svg" alt=""></div>
					<p class="advantage_text">Персональный менеджер</p>
				</div>
				<div class="advantage_item">
					<div class="advantage_icon"><img src="../static/imgs/advantages/advantage_2.svg" alt=""></div>
					<p class="advantage_text">Возврат товара</p>
				</div>
				<div class="advantage_item">
					<div class="advantage_icon"><img src="../static/imgs/advantages/advantage_3.svg" alt=""></div>
					<p class="advantage_text">Низкие цены</p>
				</div>
				<div class="advantage_item">
					<div class="advantage_icon"><img src="../static/imgs/advantages/advantage_4.svg" alt=""></div>
					<p class="advantage_text">Бесплатная доставка</p>
				</div>
			</div>
		</div>
	</section>




	<section class="partners">
		<div class="container">
			<h2 class="title">Наши партнеры</h2>

			<div class="swiper-container" id="partnersSlider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="../static/imgs/partners/partner_adelia.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="../static/imgs/partners/partner_akfix.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="../static/imgs/partners/partner_bramek.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="../static/imgs/partners/partner_korner.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="../static/imgs/partners/partner_marrbaxx.png" alt="">
					</div>
					<div class="swiper-slide">
						<img src="../static/imgs/partners/partner_premial.png" alt="">
					</div>
				</div>
			</div>

			<div class="swiper-button-prev partnersSlider-prev"></div>
			<div class="swiper-button-next partnersSlider-next"></div>

		</div>
	</section>




	<section class="subscribe_block">
		<div class="container">
			<h2 class="title">Акции и последние новости</h2>

			<p class="subtext">Узнавайте о скидках первыми!</p>

			<form action="" method="POST">
				<div class="input_box input_box--square">
					<input type="text" class="input_text" placeholder="E-mail">
				</div>
				<input type="submit" name="" value="Подписаться" class="btn btn--orange btn--orange-border">
			</form>
		</div>
	</section>



	<?php include ('./_include/footer.php');?>


</body>
</html>
