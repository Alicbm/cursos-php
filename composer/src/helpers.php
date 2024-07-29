<?php

//para nombrar la funcion primero debemos 
//validar que no exista una funcion con ese nombre

if(!function_exists(upper)) {
  function upper ($value) {
    return Text\Format::upperText($value);
  }
}

if(!function_exists(lower)) {
  function lower ($value) {
    return Text\Format::lowerText($value);
  }  
}