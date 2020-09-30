<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');


if (isset($_POST["name"])) { $person_name = htmlspecialchars($_POST["name"]);}
if (isset($_POST["mail"])) { $person_mail = htmlspecialchars($_POST["mail"]);}
if (isset($_POST["phone"])) { $person_phone = htmlspecialchars($_POST["phone"]);}
if (isset($_POST["message"])) { $message = htmlspecialchars($_POST["message"]);}


$url_google_api = 'https://www.google.com/recaptcha/api/siteverify';
$secret = '6Ldw1-sUAAAAAJPSj-rza4abuU0G8cp6zGxHBGoV';
$query = $url_google_api.'?secret='.$secret.'&response='.$_POST['grecaptcha'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
$data = json_decode(file_get_contents($query), true); // записываем полученные данные в виде ассоциативного массива
$score = $data['score']; // оценка Google recaptcha v3, от 0.1 до 0.9, где 0.9 означает "точно не спам"

if($data['success']) {
	if(($person_name != '') && ($person_mail != '')) {

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->Host = 'smtp.yandex.ru';
		$mail->SMTPAuth = true;
		$mail->Username = 'order@svetmedia.pro';
		$mail->Password = 'H2hhggnd8hh';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->setFrom('order@svetmedia.pro');

		$mail->addAddress('order@svetmedia.pro');
		// $mail->addAddress('syd.phoenix@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Новая заявка Svetmedia';
		$mail->Body = '<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Новая заявка Svetmedia</title>
		</head>
		<body>
		<table width="100%" cellpadding="0" cellspacing="0"><tr><td>
		<table id="top-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">От кого: '. $person_name .'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">Адрес почты: '.$person_mail.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">Телефон: '.$person_phone.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">Сообщение: '.$message.'</p></td></tr></table>

		</tr></td>
		</table>
		</body>
		</html>';

		// Результат
		if(!$mail->send()) {
			echo 'error';
		} else {
			echo 'ok';
		}
	}
}


?>
