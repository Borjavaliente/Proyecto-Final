<?php
    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");

    $idApp = $_POST['idapp'];

    Conexion::conectar();
    $instaplicacion = new Aplicaciones($idApp);
    $instaplicacion->bloquearAplicacion($idApp);
    Conexion::desconectar();
    header("Location:../webadmin.php");
?>
