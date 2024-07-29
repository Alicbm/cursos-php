<?php

namespace Alic\Poo\models;

use Alic\Poo\utils\UUID;
use Alic\Poo\models\Post;


class User {
  private string $id;
  private array $posts;
  private array $followers;

  public function __construct(
    private string $name,
    private string $username,
    private string $email,
    private string $password,
  ) {
    $this->id = UUID::generate();
    $this->posts = [];
    $this->followers = [];
  }

  public function getId() {
    return $this->id;
  }

  public function getUsername() {
    return $this->username;
  }

  public function publish(Post $post) {
    array_push($this->posts, $post);
  }

  public function getFollowers() {
    return $this->followers;
  }

  public function showPost() {
    foreach ($this->posts as $post) {
      var_dump($post->toString());
    }
  }

  private function hasFollower(User $user) {
    $found = array_filter(
      $this->followers,
      fn (User $follower) => $follower->id === $user->id
    );

    return count($found) === 1;
  }

  public function addFollower(User $user) {
    if (!$this->hasFollower($user)) {
      if ($user->id !== $this->id) {
        array_push($this->followers, $user);
      } else {
        echo "You can't follow yourself";
      } 
    } else {
      echo "El usuario " . $user->getUsername() . " ya es un follower \n";
    }
  }

  public static function showProfile(User $user) {
    $profile = "Nombre: " . $user->name . "\n";
    $profile .= "Followers: " . count($user->followers) . "\n";
    $profile .= "Posts: " . count($user->posts) . "\n";

    return $profile;
  }

}

