<?php

require "vendor/autoload.php";
use Alic\Poo\models\Post; //asi traemos la clase Post
use Alic\Poo\models\ImagePost;
use Alic\Poo\models\VideoPost;
use Alic\Poo\models\User;

$miObjeto = new Post("El pepe");
$imageObjeto = new ImagePost("Alic es genial", "image.png");

$marcos = new User("Marcos", "marquiños", "marcos@mail.com", "marcos123");
$lucas = new User("Lucas", "lucas", "lucas@mail.com", "lucas123");  
$andres = new User("Andres", "andres", "andres@mail.com", "andres123");
$luis = new User("Luis", "luis", "luis@mail.com", "luis123");

$marcosPost = new ImagePost("de vacaciones en la playa", "marcos.png");
$lucasPost = new VideoPost("firmando tratos", "lucas.mov");
$andresPost = new VideoPost("el ,ejor curso que he tomado", "andres.mov");
$luisPost = new ImagePost("feliz de la vida", "luis.png");

$marcos->publish($marcosPost);
$lucas->publish($lucasPost);
$andres->publish($andresPost);
$luis->publish($luisPost);

$marcosPost->addLike($lucas);
$marcosPost->addLike($andres);

$luisPost->addLike($marcos);
$luisPost->addLike($lucas);
$luisPost->addLike($luis);
$luisPost->addLike($andres);

$marcos->addFollower($lucas);
$marcos->addFollower($andres);

print_r(User::showProfile($marcos));
print_r(User::showProfile($lucas));
print_r(User::showProfile($andres));
print_r(User::showProfile($luis));
