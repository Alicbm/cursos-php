<?php

$tienda_de_cafes = [
  "americano" => 20,
  "latte" => 25,
  "recalentado" => 10,
  "capuccino" => 27.5,
  "mocca" => 24,
];

#break
// foreach ($tienda_de_cafes as $key => $value) {
//   echo "estamos en el cafe $key \n";

//   if($key == "latte") {
//     echo "Ya encontraste el cafe que buscabas \n";
//     break;
//   }
// }

#continue
foreach ($tienda_de_cafes as $key => $value) {
  
  if($key == "recalentado") {
    continue;
  }
  
  echo "el cafe $key es muy rico \n";
}




