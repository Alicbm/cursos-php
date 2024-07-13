<?php

$precios_de_cafes = [12, 56, 67, 3, 67, 0, 5];

//organiza el array de menor a mayor
//modifica el array oiginal
usort($precios_de_cafes, function ($a, $b){
  return $a <=> $b;
});

var_dump($precios_de_cafes);


