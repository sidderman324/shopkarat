<div class="registration_block">
	<span class="btn_close js-close-registration">
		<svg class="close_icon"><use xlink:href="#icon_close"></use></svg>
	</span>

	<div class="registration_tabs">
		<div class="registration_head">
			<p class="registration_head_item active">Вход</p>
			<p class="registration_head_item">Регистрация</p>
		</div>

		<div class="registration_body">
			<div class="registration_body_item active">
				<form action="" method="POST">
					<div class="input_wrapper">
						<input type="text" name="login_signin" id="login_signin" placeholder="Логин (почта)" class="input_text">
					</div>
					<div class="input_wrapper">
						<input type="text" name="password_signin" id="password_signin" placeholder="Пароль" class="input_text">
					</div>

					<div class="input_wrapper warning">
						<span>Неправильный пароль</span>
						<input type="text" name="password_signin_warn" id="password_signin_warn" placeholder="Пароль" class="input_text">
					</div>

					<a href="#" class="registration_link">Забыли?</a>

					<input type="submit" class="btn btn--orange registration_btn" value="Войти">

					<div class="text">
						<svg class="registration_icon"><use xlink:href="#icon_stage"></use></svg>

						Отправляя свои данные я принимаю политику конфиденциальности
					</div>
				</form>
			</div>
			<div class="registration_body_item">
				<form action="" method="POST">
					<div class="input_wrapper">
						<input type="text" name="login_registration" id="login_registration" placeholder="Логин (почта)" class="input_text">
					</div>
					<div class="input_wrapper">
						<input type="text" name="password_first" id="password_first" placeholder="Придумайте пароль" class="input_text">
					</div>
					<div class="input_wrapper">
						<input type="text" name="password_second" id="password_second" placeholder="Повторите пароль" class="input_text">
					</div>

					<input type="submit" class="btn btn--orange registration_btn" value="Зарегистрироваться">

					<div class="text">
						<svg class="registration_icon"><use xlink:href="#icon_stage"></use></svg>

						Отправляя свои данные я принимаю политику конфиденциальности
					</div>
				</form>								
			</div>
		</div>
	</div>
</div>

<div class="popup_bgr registration_block_bgr js-close-registration js-close-filterbar"></div>