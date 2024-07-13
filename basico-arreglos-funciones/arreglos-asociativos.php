<?php

$edades = [
  "Carlos" => 18,
  "Alic" => 20,
  "Juan" => 40,
];

//tres formas de seleccionar los valores de las edades con los arrays
echo "la edad de Alic es: $edades[Alic] \n";
echo "la edad de Juan es: " . $edades["Juan"] . "\n";
echo "la edad de Carlos es: {$edades["Carlos"]} \n";

$personas = [
  "Carlos" => [
    "edad" => 18,
    "apellido" => "Santana",
  ],
  "Alic" => [
    "edad" => 20,
    "apellido" => "Barandica",
  ],
];

echo "La información de Alic es: Edad: {$personas["Alic"]["edad"]}, apellido: {$personas["Alic"]["apellido"]} \n";



