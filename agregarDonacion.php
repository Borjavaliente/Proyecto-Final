<?php
    require_once("../class/donaciones.php");
    require_once("../class/conexion.php");
    @session_start();

    $idDonaciones = null;
    $fechaDonacion = date("Y-m-d");
    $importe = $_POST['cantidad'];
    $idUsuario = $_SESSION['idUsuario'];

    $instancDonacion = new Donaciones($idDonaciones,$fechaDonacion,$importe,$idUsuario);
    Conexion::conectar();
    $instancDonacion->agregarDonacion($idDonaciones,$fechaDonacion,$importe,$idUsuario);
    Conexion::desconectar();
    header("location: ../webuser.php")

 ?>
