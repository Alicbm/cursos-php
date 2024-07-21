<?php 

$se_habla_de_bruno = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales</title>
</head>
<body>
  
  <h1>ESTO NO SE DEBE HACER</h1>
  <?php 
  if ($se_habla_de_bruno) {
    echo "<p>Se habló de bruno</p>";
   } else {
    echo "<p>No se habló de bruno</p>";
   }
  ?> 

  <h1>ESTO ES ACEPTABLE</h1>
  <?php if($se_habla_de_bruno) {?>
    <p>Se habló de bruno</p>
  <?php } else { ?>
    <p>No se habló de bruno</p>
  <?php }?>

  <h1>ESTO SI DEBERÍAS HACERLO</h1>
  <?php if($se_habla_de_bruno): ?>
    <p>Se habló de bruno</p>
  <?php else: ?>
    <p>No se habló de bruno</p>
  <?php endif; ?>

</body>
</html>