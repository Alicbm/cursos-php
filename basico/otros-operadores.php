<?php

//operador de asignacion
$edad_alic = ($edad_david = 18) + 2;
// $edad_alic = 20;

echo "la edad de david es $edad_david";
echo "\n";
echo "la edad de alic es $edad_alic";

echo "\n";

//operadores de incrementoo
$contador = 1;

// $contador += $contador;
$contador++;

/*

+=
-=
*=
/=

*/

echo "$contador \n";

//operador de concatenacion
$nombre_1 = "Carlos";
$nombre_1 = $nombre_1 . " " ."Santana \n";

echo $nombre_1;

$nombre_2 = "Alic";
$nombre_2 .= " " ."Barandica \n";
echo $nombre_2;

//
$contador = 0;
$resultado = $contador++;

//el resultado da cero porque primero asigna y luego hace la suma
//es por esto que no se ve reflejado el incremento en resultado
//por que ocurre esto? por la precedencia de php
echo $resultado;