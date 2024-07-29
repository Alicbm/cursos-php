<?php

namespace Alic\Poo\models;
use Alic\Poo\models\Post;
use Alic\Poo\models\IPost;

class ImagePost extends Post  implements IPost { 
  public function __construct(
    private string $mensaje, 
    private string $image
  ){

    //llamamos al constructor de la clase padre (Post)
    parent::__construct($mensaje);
  }

  // public function getMensajeImagePost(){
  //   return $this->getMensaje();
  // }

  // public function getSaludoPost () {
  //   return $this->saludo();
  // }

  public function getImage():string {
    return $this->image;
  }

  public function toString():string {
      $info = "id: " . $this->getId() . "\n";
      $info += "Mensaje: " . $this->getMensaje() . "\n";
      $info = "Imagen: " . $this->getImage() . "\n";
      $info = "Likes: " . $this->getLikes() . "\n";
      return $info;
  }

}






