<?php 

//por el psr-4 de composer.json
namespace Text;

//por convencion ponemos el fnombre del archivo
class Format {
  public static function upperText($value) {
    return strtoupper($value);
  }

  public static function lowerText($value) {
    return strtolower($value);
  }
}