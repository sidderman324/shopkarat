<header class="page-header">
	<div class="container">
		<div class="top_menu_block">
			<nav>
				<ul class="top_menu">
					<li><a href="#">О компании</a></li>
					<li><a href="catalog.php">Каталог</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="calculator.php">Калькулятор распила</a></li>
					<li><a href="#">Конструктор кухни</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</nav>
		</div>


		<div class="middle_menu_block">
			<div class="row">
				<a href="/wp-content/themes/karat/frontend/main-page.php"><div class="logo_wrapper"><img src="../static/imgs/main_logo_orange.svg" alt=""></div></a>

				<div class="phonebox">
					<span class="icon icon--phone"></span>
					<a href="tel:+78612050519" class="phone_header">8(861)205-05-19</a>
					<a href="tel:+78612050592" class="phone_header">8(861)205-05-92</a>
				</div>

				<div class="lk_block">

					<a href="#" class="lk_link js-popup-open" data-popup-name="js-popup-registration">Регистрация</a>

					<a href="#" class="lk_link js-popup-open" data-popup-name="js-popup-login">Вход</a>

					<a href="#" class="btn btn--black js-popup-open" data-popup-name="js-popup-login">Личный кабинет</a>

				</div>
			</div>
			<div class="row">

				<div class="geo_block">
					<a href="#" class="link link--geo">
						<span class="icon icon--geo"></span>
						Краснодар
					</a>
				</div>

				<div class="search_block">
					<div class="input_box input_box--search">
						<input type="text" class="input_text" placeholder="Я хочу купить...">
						<a href="#" class="link link--search">
							<span class="icon icon--search"></span>
						</a>
					</div>
				</div>

				<div class="link_block">
					<a href="#" class="link link--compare">
						<span class="icon icon--compare"></span>
					</a>
					<a href="#" class="link link--favorite icon_count_box">
						<span class="icon icon--favorite"></span>
						<span class="count">1</span>
					</a>
					<a href="#" class="link link--basket">
						<span>Корзина</span>
						<span class="icon_count_box">
							<span class="icon icon--basket"></span>
							<span class="count">1</span>
						</span>
					</a>
				</div>

			</div>
		</div>


		<div class="bottom_menu_block">
			<ul class="icon_menu">
				<li>
					<a href="#">
						<span class="icon icon--decor"></span>
						<span>ДЕКОРЫ МЕБЕЛЬНЫЕ</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon icon--edge"></span>
						<span>КРОМОЧНЫЕ МАТЕРИАЛЫ</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon icon--sink"></span>
						<span>МОЙКИ И СМЕСИТЕЛИ</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon icon--furniture"></span>
						<span>МЕБЕЛЬНАЯ ФУРНИТУРА</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon icon--plates"></span>
						<span>ПЛИТНЫЕ МАТЕРИАЛЫ</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon icon--shkaf"></span>
						<span>ПРОФИЛЬ ДЛЯ ШКАФОВ-КУПЕ</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon icon--facade"></span>
						<span>ФАСАДЫ</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>


<div class="popup_block popup_block--lk js-popup-login">
	<span class="close_btn js-popup-close"></span>

	<form action="" method="POST">
		<p class="popup_title">Войти</p>

		<p class="popup_description">Авторизуйтесь, чтобы управлять личными данными и отслеживать свои заказы.</p>

		<div class="row">
			<div class="column">
				<p class="popup_subtitle">Зарегистрированный пользователь</p>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="E-mail">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Пароль">
				</div>
				<div class="row">
					<div class="custom_checkbox custom_checkbox--square">
						<input id="remember_user" type="checkbox">
						<label for="remember_user" name="remember_user"><span>Запомнить меня</span></label>
					</div>

					<a href="#" class="link">Забыли пароль?</a>
				</div>

				<input type="submit" name="" value="Войти" class="btn btn--orange">
			</div>
			<div class="column">

				<p class="popup_subtitle">Новый пользователь</p>

				<a href="#" class="btn btn--transparent">Регистрация</a>

			</div>
		</div>
	</form>
</div>





<div class="popup_block popup_block--lk js-popup-registration">
	<span class="close_btn js-popup-close"></span>

	<form action="" method="POST">
		<p class="popup_title">Регистрация</p>

		<p class="popup_description">После регистрации на сайте вам будет доступно отслеживание состояния заказов, личный кабинет и другие новые возможности.</p>

		<div class="row">
			<div class="column">
				<p class="popup_subtitle">Для физических лиц</p>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Фамилия Имя Отчество">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="E-mail">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Телефон">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Пароль">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Подтверждение пароля">
				</div>


				<div class="custom_checkbox custom_checkbox--square custom_checkbox--square-left">
					<input id="confirmation_fiz" type="checkbox">
					<label for="confirmation_fiz" name="confirmation_fiz"><span>Я согласен на <a href="#">обработку персональных данных</a></span></label>
				</div>

				<input type="submit" name="" value="Зарегистрироваться" class="btn btn--orange">
			</div>
			<div class="column">

				<p class="popup_subtitle">Для юридических лиц</p>


				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Фамилия Имя Отчество">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="E-mail">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Телефон">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="ИНН">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="КПП">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Юр. адрес">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Пароль">
				</div>

				<div class="input_box input_box--square input_box--black input_box--wide">
					<input type="text" class="input_text" placeholder="Подтверждение пароля">
				</div>

				<div class="custom_checkbox custom_checkbox--square custom_checkbox--square-left">
					<input id="confirmation_ur" type="checkbox">
					<label for="confirmation_ur" name="confirmation_ur"><span>Я согласен на <a href="#">обработку персональных данных</a></span></label>
				</div>

				<input type="submit" name="" value="Зарегистрироваться" class="btn btn--transparent">

			</div>
		</div>
	</form>
</div>
