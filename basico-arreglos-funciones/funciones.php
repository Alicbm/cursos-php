<?php 

function get_pokemon($numero_aleatorio){
  switch ($numero_aleatorio) {
    case 1:
      echo "Pikachu";
      break;
    case 2:
      echo "Charmander";
      break;
    case 3:
      echo "MewTwo";
      break;
    default:
      echo "Lo siento, no hay pokemon para ese número";
      break;
  }
}

$number = (int) readline("Escribe un número =>");

get_pokemon($number);

