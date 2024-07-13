<?php

$horas = readline("Ingresa la cantidad de horas: ");
$minutos = readline("Ingresa la cantidad de minutos: ");
$segundos = readline("Ingresa la cantidad de segundos: ");

$segundos = (3600 * $horas) + (60 * $minutos) + ($segundos);

echo $segundos;




