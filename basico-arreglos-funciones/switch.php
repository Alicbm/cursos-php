<?php

//gato 1: 9
//gato 2: 4
//gato 3: 3
//gato 4: 9
//gato 5: 1

$gato = 4;

switch ($gato) {
  case 1:
  case 4:
    echo "Su número favorito es el 9";
    break;
  case 2:
    echo "Su número favorito es el 4";
    break;
  case 3:
    echo "Su número favorito es el 3";
    break;
  case 5:
    echo "Su número favorito es el 1";
    break;
  default:
    echo "No haces parte de la lista de gatos";
    break;
}






