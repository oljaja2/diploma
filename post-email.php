<?php
$email = trim(strip_tags($_POST['email']));
$name = trim(strip_tags($_POST['name']));
$tel = trim(strip_tags($_POST['tel']));
$to = 'oljaja2@gmail.com'; // адрес получателя
$subject = 'Новый клиент '; // тема письма
$message = 'Имя: ' . $name . ' ' . 'Email: ' . $email . ' ' . 'телефон: ' . $tel; // формируем тело сообщения
mail("$to", "$subject", "$message", "$headers");

?>