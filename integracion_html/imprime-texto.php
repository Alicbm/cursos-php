<?php 

$nombre = "Alic David";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imprime texto y etiquetas con php</title>
</head>
<body>
  <?php echo "<b>Hola mamá, estoy aprendiendo a integrar PHP con HTML</b> <br>"; ?>

  <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i> <br>" ?>

  <h1>Hola <?= $nombre ?></h1>

</body>
</html>