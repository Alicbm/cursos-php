<?php


/*
1=0
2=1
3=2
4=3
5=5
*/

$numero_casa = readline("Escribe el número de la casa a la que quieres llegar => ");
$value_caminos = [
  "1" => 0,
  "2" => 1,
  "3" => 2
];

if ($numero_casa == 1) {
  echo "Si estás en la primera casa no te desplazaras";
} else {
  for ($i=0, $j=0; $i <= $numero_casa + 1 ; $i++) { 
    
    if($i >= 3) {
      $j = $value_caminos[$i - 1] + $value_caminos[$i - 2];
      $value_caminos[$i] = $j;
    }

    if($i == $numero_casa + 1) {
      echo "Tienes $j opciones diferentes de llegar a tu destino (a la casa $numero_casa) \n";
    }
  }

}







