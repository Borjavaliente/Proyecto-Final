<?php
    include("../class/conexion.php");
    include("../class/noticias.php");

    $idNoticia = $_POST['idNoticia'];

    Conexion::conectar();
    $instNoticia = new Noticia($idNoticia);
    $instNoticia->eliminarNoticia($idNoticia);
    Conexion::desconectar();
    header("Location:../webadmin.php");

?>
