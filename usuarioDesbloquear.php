../<?php

    require_once("../class/usuarios.php");
    require_once("../class/conexion.php");

    $nick = $_POST['nick'];

    $instUsuario = new Usuarios($nick);
    //$instUsuario = new Usuarios(null,"borja","valiente","01-01-10","borjita","usuario","fotos/","borja@correo.es","aaa123","activo");
    Conexion::conectar();
    $instUsuario->desbloqueoUsuario($nick);
    Conexion::desconectar();
    header("Location:../webadmin.php");

 ?>
