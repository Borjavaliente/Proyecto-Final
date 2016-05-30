<?php

    require_once("../class/aplicaciones.php");
    require_once("../class/conexion.php");

    $idApp = $_POST['idappelim'];
    $instaplicacion = new aplicaciones($idApp);
    Conexion::conectar();
    $instaplicacion->eliminarAplicacion($idApp);
    Conexion::desconectar();
    header("Location:../webadmin.php");

?>
