<?php

$gatos = [
  "gato 1" =>  [
    "nombre" => "gato 1",
    "ocupacion" => "doctor",
    "color" => "verde",
    "comidas" => [
      "favoritas" => "granos, helado, manzana",
      "no_gustosas" => "lenteja, galleta, guanabana",
    ]
  ],
  "gato 2" =>  [
    "nombre" => "gato 2",
    "ocupacion" => "backend developer",
    "color" => "azul",
    "comidas" => [
      "favoritas" => "pescado, carne, mariscos",
      "no_gustosas" => "chocolate, arroz",
    ]
  ],
  "gato 3" =>  [
    "nombre" => "gato 3",
    "ocupacion" => "frontend developer",
    "color" => "negro",
    "comidas" => [
      "favoritas" => "pizza, ganulada",
      "no_gustosas" => "perejil",
    ]
  ],
];

echo $gatos["gato 3"]["comidas"]["favoritas"];



