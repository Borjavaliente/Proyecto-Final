<?php
include("..class/comentarios.php");

Conexion::conectar();
$instcomentario = new Comentarios();
$instcomentario->mostrarComentarios();
Conexion::desconectar();
 ?>
