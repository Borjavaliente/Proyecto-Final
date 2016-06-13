<?php

    require_once("../class/usuarios.php");
    require_once("../class/conexion.php");

    $idUsuario = $_POST['idusuario'];

    $instUsuario = new Usuarios($idUsuario);
    Conexion::conectar();
    $instUsuario->hacerSuperUsuario($idUsuario);
    Conexion::desconectar();
    header("Location:../webadmin.php");
 ?>
