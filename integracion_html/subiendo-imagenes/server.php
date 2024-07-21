<?php 

echo "<pre>";

var_dump($_FILES);

echo "</pre>";

$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];

//guardo en la carpeta images el archivo con nombre en basename
$ruta_a_subir = "images/$basename";

//esta funcion sirve para mover una imagen que se sube
//en este caso la pasamos de la ruta temporal a la carpeta images
move_uploaded_file($image, $ruta_a_subir);

// echo "$basename";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <img src="<?= $ruta_a_subir ?>" alt="<?= $basename?>" srcset="">
</body>
</html>
