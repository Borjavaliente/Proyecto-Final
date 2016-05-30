<?php

include("class/noticias.php");
include("class/conexion.php");

$instnoticia = new Noticias($idNoticia,$titulo,$contenido,$fechapublicacion);
Conexion::conectar();
$instnoticia->mostrarcontenidoNoticia($titulo);
Conexion::desconectar();

header("Location: noticias.php");

 ?>
