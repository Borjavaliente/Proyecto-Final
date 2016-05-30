<?php

    require_once("../class/usuarios.php");
    require_once("../class/conexion.php");

    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNac = $_POST['fecha'];
    $rol = "usuario";
    $imgPerfil = "img/";
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $estado = "activo";
    $instUsuario = new Usuarios($nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
    Conexion::conectar();
    $instUsuario->altaUsuario($nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
    Conexion::desconectar();
    header("Location:../webadmin.php");

?>
