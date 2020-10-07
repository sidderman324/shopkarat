<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');


if (isset($_POST["calc_name"])) { $person_name = htmlspecialchars($_POST["calc_name"]);}
if (isset($_POST["calc_email"])) { $person_mail = htmlspecialchars($_POST["calc_email"]);}
if (isset($_POST["calc_phone"])) { $person_phone = htmlspecialchars($_POST["calc_phone"]);}
if (isset($_POST["calc_message"])) { $message = htmlspecialchars($_POST["calc_message"]);}

if (isset($_POST['pdf_file'])) { $pdf_file = $_POST['pdf_file']; }

$decoded_pdf = base64_decode(str_replace(" ", "+", substr($pdf_file, strpos($pdf_file, ","))));




if($person_phone != '') {

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->Host = 'smtp.yandex.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 's.i.sidorovkrd@yandex.ru';
	$mail->Password = 'sidder13';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;


	$mail->addStringAttachment($decoded_pdf, "Карта раскроя и распила ЛДСП, МДФ, ХДВ.pdf");

	$mail->setFrom('s.i.sidorovkrd@yandex.ru');

	$mail->addAddress('syd.phoenix@gmail.com');
	// $mail->addAddress('om_karat@mebelfur.ru');

	$mail->isHTML(true);
	$mail->Subject = 'Новая заявка ShopKarat';
	$mail->Body = '<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Новая заявка ShopKarat</title>
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


?>
