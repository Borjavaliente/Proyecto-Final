<?php
    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");

    $idApp = $_POST['idappbloq'];
    $instaplicacion = new aplicaciones($idApp);
    Conexion::conectar();
    $instaplicacion->bloquearAplicacion($idApp);
    Conexion::desconectar();
    header("Location:../webadmin.php"); 
?>
