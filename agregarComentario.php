<?php

    include("../class/comentario.php");
    include("../class/conexion.php");

    session_start();

    $idComentario = null;
    $idUsuario = $_SESSION['idUsuario'];
    $idApp = $_SESSION['idApp'];
    $fecha = date("Y-m-d");
    $comentario = $_POST['comentario'];


    Conexion::conectar();
    $instComentario = new Comentarios($idComentario,$idApp,$idUsuario,$fecha,$comentario);
    $instComentario->insertarComentario($idComentario,$idApp,$idUsuario,$fecha,$comentario);
    $_SESSION['idApp'] = null;
    //header("Location:../producto.php?idApp=$idApp");
    Conexion::desconectar();
    header("Location:../producto.php?idApp=$idApp");
    session_start();
    $_SESSION['idUsuario'] = $idUsuario;



 ?>
