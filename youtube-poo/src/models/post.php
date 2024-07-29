<?php

//con esto le digo que mi clase post existe dentro del namespace Alic\Poo de autoload
namespace Alic\Poo\models;

use Alic\Poo\models\User;
use Alic\Poo\models\Like;
use Alic\Poo\utils\UUID;

class Post {
  
  private string $id;
  private string $mensaje;
  private array $likes;
  
  //constructor
  public function __construct(string $mensaje) {
    print_r("Se creó un nuevo objeto Post \n");

    //accedemos asi porque es una funcion static
    $this->id = UUID::generate(); //genera ids unicos
    $this->likes = [];
  }

  //con la opcion protected puedo acceder dentro de 
  //las clases hijas o dentro e la misma clase
  //pero no por fuera
  protected function saludo() {
    return "Hola desde este post con id $this->id";
  }

  public function getId():string {
    return $this->id;
  }

  public function setId(string $id) {
    $this->id = $id;
  }

  public function getMensaje() {
    return $this->mensaje;
  }

  public function getLikes() {
    return $this->likes;
  }

  protected function checkIfUserLiked (User $user): bool {
    $found = array_filter(
      $this->likes,
      function (Like $like) use ($user) {
        return $like->getUser()->getId() === $user->getId();
      }
    );

    return count($found) === 1;
  }

  public function removeLike(User $user) {
    $this->likes = array_filter(
      $this->likes,
      function (Like $like) use ($user) {
        return $like->getUser()->getId() !== $user->getId();
      }
    );
  }

  public function addLike (User $user) {
    if($this->checkIfUserLiked($user)) {
      $this->removeLike($user);
    } else {
      array_push($this->likes, new Like($user));

    }
  }

}



