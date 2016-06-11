<?php

    require_once("../class/conexion.php");
    require_once("../class/usuarios.php");

    $idUsuario = null;
    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNac = $_POST['fecha'];
    $rol = "usuario";
    $imgPerfil = "img/";
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $estado = "activo";

    $instMostrar = new Usuarios($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
    Conexion::conectar();
    $instMostrar->mostrarUsuarios($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
    Conexion::desconectar();
    //header("Location:webadmin.php");

 ?>
