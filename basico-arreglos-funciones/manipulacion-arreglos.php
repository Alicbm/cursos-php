<?php

$edades = [18, 22, 40, 34];

//count: canticad de elementos
// echo count($edades) . "\n";

//array_push: agregar valores al final
array_push($edades, 13);
// var_dump($edades);

//is_array: saber si es o no un array
$no_es_un_array = "";
// var_dump(is_array($no_es_un_array));

//explode: de string a array
//inidicamos el separados y luego el string a convertir
$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);
// var_dump($lista_de_frutas_array);

//implode: de array a string
$lista_de_frutas_array_2 = ["fresa", "cereza", "manzana"];
$lista_de_frutas_string = implode(",", $lista_de_frutas_array_2);
var_dump($lista_de_frutas_string);


