<?php

    require_once("../class/ofertas.php");
    require_once("../class/conexion.php");

    $idOferta = null;
    //$idApp = $_POST['app'];
    $idApp = $_POST['app'];
    //$precioOferta = $_POST['precioOferta'];
    $fechaInicio = $_POST['fechaInicio'];
    $precio = $_POST['precioOferta'];
    $fechaFin = $_POST['fechaFin'];
    $precioNuevo = null;
    $instOferta = new Ofertas($idOferta,$idApp,$precio,$fechaInicio,$fechaFin,$precioNuevo);
    Conexion::conectar();
    $instOferta->agregarOferta($idOferta,$idApp,$precio,$fechaInicio,$fechaFin,$precioNuevo);
    //$instOferta->triggerAgregarOferta($idApp);
    Conexion::desconectar();
    //header('Location:../webadmin.php');

 ?>
