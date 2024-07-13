<?php

//a diferencia del while, este ejecuta el codigo al menos una vez
//aunque sea falsa la condición, es la unica diferencia

$usernames = ["alic123", 'davidm', 'pepem'];

do {
  $username = readline("Escribe el nombre del usuario => ");
  echo "\n";
} while(in_array($username, $usernames));
#en el while lo que valida es si username esta en el array de usernames