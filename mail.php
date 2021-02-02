<?php

$to ='jarekjanas95@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Wiadomość portfolio';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);

?>

