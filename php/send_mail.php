<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require "PHPMailer/src/PHPMailer.php";
	require "PHPMailer/src/Exception.php";

	$mail = new PHPMailer(true);
	$mail->CharSet = "UTF-8";

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$messange = $_POST["messange"];

	$body = $name . ' ' . $phone . ' ' . $messange;
	$theme = "[Заявка с формы]";

	$mail->addAddress("k.pharin@yandex.ru");
	$mail->Subject = $theme;
	$mail->Body = $body;

	$main->send();

?>