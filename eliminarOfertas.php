<?php

    include("../class/conexion.php");
    include("../class/ofertas.php");


    $idOferta = $_POST['idoferta'];

    Conexion::conectar();
    $instEliminaOferta = new Ofertas($idOferta);
    $instEliminaOferta->eliminarOferta($idOferta);
    //$instEliminaOferta->triggerEliminarOferta($idApp);
    header("Location:../webadmin.php");
    Conexion::desconectar();

 ?>
