<?php

    require_once("../class/ofertas.php");
    require_once("../class/conexion.php");

    $idOferta = null;
    $idApp = $_POST['app'];
    $precioOferta = $_POST['precioOferta'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];
    $instOferta = new Ofertas($idOferta,$idApp,$precioOferta,$fechaInicio,$fechaFin);
    Conexion::conectar();
    $instOferta->agregarOferta($idOferta,$idApp,$precioOferta,$fechaInicio,$fechaFin);
    //$instOferta->triggerAgregarOferta($idApp);
    Conexion::desconectar();
    header('Location:../webadmin.php');

 ?>
