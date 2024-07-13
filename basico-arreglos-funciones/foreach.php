<?php

$tienda_de_cafes = [
  "americano" => 20,
  "latte" => 25,
  "capuccino" => 27.5,
  "mocca" => 24,
];

//una forma de hacerlo, solo con el valor
foreach ($tienda_de_cafes as $value) {
  echo "El precio de cafe es $value \n";
}

//otra forma de hacerlo, con llave y valor
foreach ($tienda_de_cafes as $key => $value) {
  echo "El cafe es $key y su precio es $value \n";
}




