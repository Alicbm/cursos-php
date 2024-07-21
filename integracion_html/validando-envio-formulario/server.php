<?php

#isset => setea los valores y valida si el input existe y se manda
#pero no valida si esta vacio
#empty => funcion que nos indica si un valor esta o no vacio


if(isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
  echo "Hola {$_POST["nombre"]}";
} else {
  echo "El valor no ha sido enviado";
}





