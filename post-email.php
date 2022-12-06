<?php
if (!$_POST) exit;
$email = trim(strip_tags($_POST['email']));
$name = trim(strip_tags($_POST['name']));
$name = trim(strip_tags($_POST['tel']));
$to = 'oljaja2@gmail.com'; // адрес получателя
$subject = 'Новый клиент'; // тема письма
// формируем тело сообщения
$message = 'Имя: ' . $name . 'Email: ' . $email; 
// формируем headers для письма
$headers = 'From: '. $email ; // от кого
// отправка
@mail($to, $subject, $message, $headers);
echo 'Спасибо, обращение отправлено!';
?>