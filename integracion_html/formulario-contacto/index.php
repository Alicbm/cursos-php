<?php 

require("mail.php");

function validate($name, $email, $subject, $message) {
  return !empty($name) && !empty($email) && !empty($subject && !empty($message));
}

$status = "";

if ( isset($_POST["form"]) ) {

  $name= $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message= $_POST["message"];
  $body = "$name <$email> te envía el siguiente mensaje <br><br> $message";

  if ( validate($name, $email, $subject, $message) ) {

    //mandar correo
    sendMail($subject, $body, $email, $name, true);

    $status = "success";

  } else {
    $status = "error";

  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Formulario de Contacto</title>
</head>

<body>

  <?php if($status == "success"): ?>
    <div class="alert success">
      <p class="alert-text">Formulario enviado exitosamente</p>
    </div>
  <?php endif; ?>

  <?php if($status == "error"): ?>
    <div class="alert error">
      <p class="alert-text">Problemas al enviar el formulario</p>
    </div>
  <?php endif; ?>

  <form class="form" action="./" method="post">

    <h1 class="form-title">¡Contáctanos!</h1>

    <div class="form-element">
      <label for="name" class="form-element__label">Nombre</label>
      <input class="form-element__input" type="text" name="name" id="name" />
    </div>

    <div class="form-element">
      <label for="email" class="form-element__label">Correo</label>
      <input class="form-element__input" type="email" name="email" id="email" />
    </div>

    <div class="form-element">
      <label for="subject" class="form-element__label">Asunto</label>
      <input class="form-element__input" type="text" name="subject" id="subject" />
    </div>

    <div class="form-element">
      <label for="message" class="form-element__label">Mensaje</label>
      <textarea class="form-element__textarea" name="message" id="message"></textarea>
    </div>

    <button class="form-button" name="form" type="submit">Enviar</button>

  </form>
</body>

</html>