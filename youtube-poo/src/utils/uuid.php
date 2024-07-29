<?php

namespace Alic\Poo\utils;

class UUID {
  
  //cuando creamos metodos static de le indicamos a la 
  //clase que podemos acceder a el sin crear una instancia

  //utilizamos static cuando no necesitamso valores externos (nuevos parametros)
  public static function generate () {
    return uniqid();
  } 
}


