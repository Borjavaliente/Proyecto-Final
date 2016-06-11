<?php

    require_once("../class/usuarios.php");
    require_once("../class/conexion.php");
    $idUsuario = null;
    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNac = $_POST['fecha'];
    $rol = "usuario";
    $imagen = "fotos/".$_POST['imagen'];
    if(!isset($imagen))
    {
        $imagen = "fotos/invitado.jpg";
    }
    else
    {
        $imagen = "fotos/".$_POST['imagen'];
    }
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $estado = "activo";
    $instUsuario = new Usuarios($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imagen,$correo,$pass,$estado);
    Conexion::conectar();
    $instUsuario->altaUsuario($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imagen,$correo,$pass,$estado);
    Conexion::desconectar();
    header("Location:../webadmin.php"); 
?>
