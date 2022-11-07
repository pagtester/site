<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $messange = $_POST['messange'];

	$to = "dk.pharin@yandex.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Текст: $messange"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
