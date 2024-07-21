<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$username = $_POST["username"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];

//SANITIZAR DATOS
//sirve para guardar lo recibido como texto
$htmlentities = htmlentities($nombre);

//sirve para salvar las variables de caracteres extraños
$addcslashes = addslashes($username);;

//con preg_replace podemos meter expresiones regulares, para proteger el contenido
#esta expresion regular lo que hace es quitar los numeros y dejar solo el texto
$onlyword = preg_replace("/\d/", "", $username);

//hace lo mismo de antes, pero esta vez deja los numeros
$onlynumbers = preg_replace("/\D/", "", $username);

//para validar emails
//sanitiza los emails
$email_sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);

//sanitizamos numeros enteres
$edad_sanitizada = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos de mi usuario</title>
</head>
<body>
  
  <p>Nombre:</p>
  <?= $htmlentities ?>

  <p>Username:</p>
  <?= $onlyword ?>

  <p>Username sin letras:</p>
  <?= $onlynumbers ?>

  <p>E-mail:</p>
  <?= $email ?>

  <p>E-mail sanitizado:</p>
  <?= $email_sanitizado ?>

  <p>Edad:</p>
  <?= $edad ?>

  <p>Edad sanitizada:</p>
  <?= $edad_sanitizada ?>

</body>
</html>
