<?php 

$usuarios = [
  [
    "id" => 0,
    "username" => "Alic",
  ],
  [
    "id" => 1,
    "username" => "David",
  ],
  [
    "id" => 2,
    "username" => "Luis",
  ],
];

$edad_de_pepito = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasar variables de PHP a Javascript</title>
</head>
<body>
  
  <script>
    //convertimos el array de php a un string con json_encode
    //y luego lo parseamos con la funcion de javascript
    const users = JSON.parse('<?= json_encode($usuarios) ?>');

    const edadDePepito = <?= $edad_de_pepito ?>;
  </script>
  <script src="index.js"></script>

</body>
</html>