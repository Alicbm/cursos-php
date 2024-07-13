<?php 
#CASTING: indicar el tipo de dato de una variable

$numero = "5";

var_dump($numero);

echo "\n";

$numero = (int) $numero;

var_dump($numero);

$dias = 5.89;
$dias = (int) $dias;

var_dump($dias);

echo "\n";

#si es 0 o culauqie cosa vacia (como un "") lo convierte a false (cuando aplicamos casting)
#si es diferente a 0 lo convierte a true
$banderita = 0;

$banderita = (bool) $banderita;

var_dump($banderita);




