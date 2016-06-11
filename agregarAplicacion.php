<?php

    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");

    session_start();
    $nick = $_SESSION['username'];
    Conexion::conectar();
    $consulta = "SELECT idUsuario FROM usuarios WHERE nick='$nick'";
    $resultado = mysql_query($consulta);
    $fila = mysql_fetch_row($resultado);
    $idUsuario = $fila[0];
    Conexion::desconectar();
    $idApp = null;
    $nombre = $_POST['nombre'];
    $version = $_POST['version'];
    $tipo = $_POST['tipo'];
    $categoria = $_POST['categoria'];
    $fechaLanz = date("Y-m-d");
    $disponible = $_POST['disponible'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $autor = $_POST['autor'];
    $portada = "img/".$_POST['portada'];
    $imagen = "img/".$_POST['imagen'];
    $fichero = "admin/".$_POST['fichero'];
    
    Conexion::conectar();
    $instaplicacion = new Aplicaciones($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen,$fichero);
    $instaplicacion->agregarAplicacion($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen,$fichero);
    Conexion::desconectar();
    header("Location:../webadmin.php");

?>
