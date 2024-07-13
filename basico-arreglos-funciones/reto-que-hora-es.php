<?php

$zona_horaria = new DateTimeZone('America/Bogota'); // Cambia a tu zona horaria
$fecha_actual = new DateTime('now', $zona_horaria);
$hora_actual = $fecha_actual->format('H:i:s a'); // Obtiene la hora en formato HH:MM:SS am/pm

echo "Son las $hora_actual";

