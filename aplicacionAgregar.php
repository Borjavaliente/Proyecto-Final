<?php

    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");

    //$nombre = $_POST['nusuario'];
    //$apellido = $_POST['apellusu'];
    //$instUsuario = new Usuarios;
    $idApp = null;
    $nombre = $_POST['nombre'];
    $version = $_POST['version'];
    $tipo = $_POST['tipo'];
    $categoria = $_POST['categoria'];
    $fechaLanz = $_POST['fecha'];
    $disponible = $_POST['disponible'];
    $precio = $_POST['precio'];
    $aprobado = $_POST['aprobado'];
    $instaplicacion = new Aplicaciones($idApp,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$aprobado);
    Conexion::conectar();
    $instaplicacion->agregarAplicacion($idApp,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$aprobado);
    Conexion::desconectar();
    header("Location:../webadmin.php"); 
?>
