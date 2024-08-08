<?php

$email = "no-reply@fidel.net";
$to = "det.metallist85@gmail.com";
$sitename = "Fidel";
$pagetitle = "Новая заявка с сайта \"$sitename\"";

$first_name = trim($_POST["first_name"]);
$second_name = trim($_POST["second_name"]);
$user_email = trim($_POST["email"]);
$message = trim($_POST["message"]);


$message = "
К вам пришла заявка с сайта ".$sitename."<br>
Имя: $first_name <br>
Фамилия: $second_name <br>
Email: $user_email <br>
Сообщение: $message <br>
";

$headers = "From: $email" . "\r\n" .
    "Reply-To: $user_email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
	"Content-type: text/html; charset=\"utf-8\"";

mail($to, $pagetitle, $message, $headers);