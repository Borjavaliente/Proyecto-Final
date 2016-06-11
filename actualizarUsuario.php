<?php

    require_once("../class/conexion.php");
    require_once("../class/usuarios.php");

    @session_start();

    $idUsuario = $_SESSION['idUsuario'];
    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $fechaNac = $_POST['fechaNac'];
    $rol = "usuario";
    $imgPerfil = "fotos/invitado.jpg";
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $estado = "activo";

    Conexion::conectar();
    $instActualizaUsuario = new Usuarios($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
    $instActualizaUsuario->actualizaUsuarios($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
    Conexion::desconectar();

 ?>
