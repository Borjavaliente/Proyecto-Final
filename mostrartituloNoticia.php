<?php

include('class/noticias.php');
include('class/conexion.php');
$titulo['']=0;

$instnoticia = new Noticias($titulo);
Conexion::conectar();
$instnoticia->mostrartituloNoticia($titulo);
Conexion::desconectar();

header("Location: noticias.php");

 ?>
