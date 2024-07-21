<?php 

$usuarios = ["alic", "retax", "pepe"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
</head>
<body>
  
  <ul>
    <?php for ($i=0; $i < 10 ; $i++): ?>
      <li><?= $i ?></li>
    <?php  endfor; ?>
  </ul>

  <h1>Lista de usuarios</h1>
  <ul>
    <?php foreach ($usuarios as $user): ?>
      <li><?= $user ?></li>
    <?php endforeach; ?>
  </ul>

</body>
</html>