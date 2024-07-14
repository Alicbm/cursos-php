<?php

function clear() {
  if(PHP_OS == "WINNT") {
    system("clear");
  } else {
    system("clear");
  }
}

$possible_words = ["bebida", "prisma", "ala", "dolor", "piloto", "baldosa", "remoto", "asteroide", "gallo", "platzi"];

define("MAX_ATTEMPS", 6);

echo "Juego del ahorcado \n \n";

//inicializamos el juego
$choosen_word = $possible_words[rand(0, count($possible_words) - 1)];
$choosen_word = strtolower($choosen_word); #para convertir a minusculas
$word_length = strlen($choosen_word); #para contar el numero de letras
$discover_letters = str_pad("", $word_length, "_");
$attemps = 0;

do {
  echo "Palabra de $word_length letras \n";
  echo $discover_letters . "\n";
  
  #pedimos al user que escriba
  $player_letter = readline("Escribe una letra => ");
  $player_letter = strtolower($player_letter);
  
  #la condicional nos indica si una letra hace parte de una palabra
  if(str_contains($choosen_word, $player_letter)) {
  
    #verificamso todas las ocurrencias de esta letra para reemplazarla
    #strpos busca la primera coincidencia de una letra en un string
    $offset = 0;
    while(($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false) {
      $discover_letters[$letter_position] = $player_letter;
      $offset = $letter_position + 1;
    }

  } else {
    clear();
    $attemps++;
    echo "Letra incorrecta, Te quedan " . (MAX_ATTEMPS - $attemps) . " intentos \n";
    sleep(2); #permite pausar mi programa, lo pausa dos segundos
  }

  clear();
} while($attemps < MAX_ATTEMPS && $discover_letters !== $choosen_word);

if ($attemps < MAX_ATTEMPS) {
  echo "Felicidades, adivinaste la palabra! \n";
} else {
  echo "Suerte para la próxima \n";
}

echo "La palabra era $choosen_word \n";




