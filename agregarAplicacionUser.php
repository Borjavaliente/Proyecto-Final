<?php

    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");


    @session_start();
    $idApp = null;
    $idUsuario =$_SESSION['idUsuario'];
    $nombre = $_POST['nombre'];
    $version = $_POST['version'];
    $tipo = $_POST['tipo'];
    $categoria = $_POST['categoria'];
    $fechaLanz = date("Y-m-d");
    $disponible = "No";
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $autor = $_SESSION['nick'];
    $portada = "img/".$_POST['portada'];
    $imagen = "img/".$_POST['imagen'];
    $fichero = "user/".$_POST['fichero'];


    Conexion::conectar();
    $instaplicacion = new Aplicaciones($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen,$fichero);
    $instaplicacion->agregarAplicacion($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen,$fichero);
    Conexion::desconectar();
    echo "$idUsuario";
    echo "$autor";
    header("Location:../webuser.php");

?>
