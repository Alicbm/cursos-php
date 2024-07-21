<?php

use PHPMailer\PHPMailer\PHPMailer;

require("vendor/autoload.php");

function sendMail($subject, $body, $email, $name, $html = false) {
  
  //consfiguracion inicial de nuestro servidor de correos
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '899132cdd5d25f';
  $phpmailer->Password = '07439d739fd0c7';

  //añadiendo destinatarios
  $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa'); //quien manda
  $phpmailer->addAddress($email, $name); // quien recibe

  //Content
  $phpmailer->isHTML($html); //Set email format to HTML
  $phpmailer->Subject = $subject;
  $phpmailer->Body    = $body;

  //enviamos el correo
  $phpmailer->send();

}

?>