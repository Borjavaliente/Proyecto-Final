<?php

    include("../class/noticias.php");
    include("../class/conexion.php");
    //require_once("php/insertarNoticia.php");
    $idNoticia = null;
    $titulo = $_POST['titulo'];
    $portada = "portadas/".$_POST['portada'];
    $mensaje = $_POST['mensaje'];
    $fechapublicacion = date("Y-m-d");
    $instnoticia = new Noticia($idNoticia,$titulo,$portada,$mensaje,$fechapublicacion);
    Conexion::conectar();
    $instnoticia->insertarNoticia($idNoticia,$titulo,$portada,$mensaje,$fechapublicacion);
    Conexion::desconectar();
    header("Location:../webadmin.php");

 ?>
