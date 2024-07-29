<?php

namespace Alic\Poo\models;

use Alic\Poo\models\User;

class Like {
  public function __construct( private User $user ) {}

  public function getUser(): User {
    return $this->user;
  }
}