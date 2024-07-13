<?php

$a = 5;
$b = 5;
$b_2 = "5";
$c = 9;
$d = 2;

// == igual, no compara tipos
var_dump($a == $b);
echo "\n";

//
var_dump($a == $b_2);
echo "\n";

// === identico, compara tipos
var_dump($a === $b);
echo "\n";

//
var_dump($a === $b_2);
echo "\n";

// != diferente, no compara tipos
var_dump($a != $b);
echo "\n";

// !== diferente, compara tipos
var_dump($a !== $b_2);
echo "\n";

//<=>, nave espacial
//devuelve -1 si el numero de la izquierda es menor que el de la derecha
//si son iguales devuelve 0
//devulve 1 si el numero de la izquierda es mayor que el de la derecha
echo 4 <=> 5;
echo "\n";

//??, fusion de null
$edad_de_pepe = 23;

#si no esta la primera utiliza la segunda
echo $edad_de_juanito ?? $edad_de_pepe;

