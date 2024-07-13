<?php

#a¿la asociatividad me dice que se ejecuta primero y que despues

$contador = 1;
$resultado = $contador++;

echo $resultado . "\n";

//tiene asociatividad izquierda (-, +, .)
//se ejecuta de izquierda a derecha
echo 1 - 2 -3 - 4 . "\n";

//tiene asociatividad derecha (=)

$b = 5;
$c = 10;

//primero b se iguala a c, despues a se iguala a b
$a = $b = $c;
echo $a . "\n";

//problema de precedencia
$gatos_4_patas = true;
$gatos_programan_php = false;

//es true porque primero asigna, y el primer elemento de la asignacion es un true
//con los parentesis forzamos a que primero ocurra la operacion
//y luego la asigne
$resultado = ($gatos_4_patas and $gatos_programan_php);
var_dump($resultado); // true



