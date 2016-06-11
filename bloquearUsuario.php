../<?php

    require_once("../class/usuarios.php");
    require_once("../class/conexion.php");

    $idUsuario = $_POST['idusuario'];

    $instUsuario = new Usuarios($idUsuario);
    //$instUsuario = new Usuarios(null,"borja","valiente","01-01-10","borjita","usuario","fotos/","borja@correo.es","aaa123","activo");
    Conexion::conectar();
    $instUsuario->bloquearUsuario($idUsuario);
    Conexion::desconectar();
    header("Location:../webadmin.php");
 ?>
