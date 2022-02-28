<?php
// Получаем значения переменных из пришедших данных
$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$header1 = $_POST['header1'];
$header2 = $_POST['header2'];
$message = $_POST['message'];
$message1 = $_POST['message1'];
$message2 = $_POST['message2'];
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "Имя: $name \nE-mail: $email \nУстройство: $header \nТекст: $message  \nУстройство№2: $header1 \nТекст№2: $message1 \nУстройство№3: $header2 \nТекст№3: $message2 ";

// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
$send = mail($email, $header,  $mes,  "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
// Если отправка прошла успешно — так и пишем
if ($send == 'true') {
	$url = 'https://ramsplatform.ru/table.html';
	header("Location: " . $url . "");
	exit;
}
// Если письмо не ушло — выводим сообщение об ошибке
else {
	echo "Ой, что-то пошло не так";
}

// ----------------------------конфигурация-------------------------- // 

$adminemail = "webplatform@ramsplatform.ru";  // e-mail админа 


$date = date("d.m.y"); // число.месяц.год 

$time = date("H:i"); // часы:минуты:секунды 

$backurl = "https://ramsplatform.ru/table.html";  // На страничку переходит после отправки письма 
