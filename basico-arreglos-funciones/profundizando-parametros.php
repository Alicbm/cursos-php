<?php

// function suma($a = 1, $b = 8) {
//   echo "la suma de $a + $b es => " . $a + $b . "\n";
// }

// $arreglo1 = [1,2,3];
// $arreglo2 = [4,5,6];

// $resultado = [...$arreglo1, ...$arreglo2];
// var_dump($resultado);

// function suma($a, $b) {
//   echo "la suma de $a + $b es => " . $a + $b . "\n";
// }

// $numeros = [1, 2];

// suma(...$numeros);

#de esta forma podemos recibir todos los parametros que queramos
function suma_infinita(...$params) {
  $resultado = 0;

  foreach ($params as $value) {
    $resultado = $resultado + $value;
  }

  echo "la sumatoria de los números es => " . $resultado;
}

suma_infinita(1,2,3,4,5);