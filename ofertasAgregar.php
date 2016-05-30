<?php
    require_once("../class/ofertas.php");
    require_once("../class/conexion.php");

    $idOferta = null;
    $idApp = null;
    $porcentaje = $_POST['porcentaje'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];

    $instOferta = new Ofertas($idOferta,$idApp,$porcentaje,$fechaInicio,$fechaFin);

    Conexion::conectar();
    $instOferta->agregarOferta($idOferta,$idApp,$porcentaje,$fechaInicio,$fechaFin);
    Conexio::desconectar();
    header('Location:../webadmin.php');


 ?>
