<?php 

$palabras = ["sol", "luna", "cielo", "pepe"];

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($palabras); $i++) { 
  #concatenamos form con lo que estaba y esto
  $form .= "La palabra: ".str_shuffle($palabras[$i])."" .
  "<input type='text' name='palabra".$i."'/>".
  "<br>";
  
}

$button = "<button type='submit'>Enviar</button>";
$form_cierre = "</form>";

echo $form.$button.$form_cierre;

?>