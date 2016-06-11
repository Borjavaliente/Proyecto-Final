<?php

    include("../class/conexion.php");
    include("../class/ofertas.php");


    $idOferta = $_POST['idoferta'];
    $precio = $_POST['precio'];

    Conexion::conectar();
    $instEliminaOferta = new Ofertas($idOferta,$precio);
    $instEliminaOferta->eliminarOferta($idOferta,$precio);
    //$instEliminaOferta->triggerEliminarOferta($idApp);
    header("Location:../webadmin.php");
    Conexion::desconectar();

 ?>
