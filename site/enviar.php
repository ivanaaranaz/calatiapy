<?php

$name = $_POST['name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$message = $_POST['message'];

$header .= 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su telefono es: " . $telefono . " \r\n";
$mensaje .= "Su mensaje es: " . $message . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'formdtvargentina@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>