<?php
header('Content-Type: text/html; charset=utf-8');
$email = trim(strip_tags($_POST['email']));
$name = trim(strip_tags($_POST['name']));
$tel = trim(strip_tags($_POST['tel']));
$to = 'oljaja2@gmail.com'; 
$subject = 'Новый клиент ';
$message = 'Имя: ' . $name . ' ' . 'Email: ' . $email . ' ' . 'телефон: ' . $tel; 
mail("$to", "$subject", "$message", "$headers");

?>