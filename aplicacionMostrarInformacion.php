<?php
    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");

    $nombre = "";
    $version = "";
    $tipo = "";
    $categoria = "";
    $fechaLanz = "";
    $precio = "";
    $autor = "";

    $instMostrar = new Aplicaciones($nombre,$version,$tipo,$categoria,$fechaLanz,$precio,$autor);

    Conexion::conectar();
    $instMostrar->mostrarInformacion($nombre,$version,$tipo,$categoria,$fechaLanz,$precio,$autor);

    Conexion::desconectar();

 ?>
