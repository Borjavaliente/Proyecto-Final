<?php

    require_once("../class/pedidos.php");
    require_once("../class/conexion.php");
    session_start();
    //$pass = $_POST['pass'];
    //$compruebaPassw = $_SESSION['passw'];

    $idPedido = null;
    $idApp = $_SESSION['idApp'];
    $idUsuario = $_SESSION['idUsuario'];
    $fechaCompra = date("Y-m-d");
    $importe = 0;
    Conexion::conectar();
    $instPedido = new Pedidos($idPedido,$idApp,$idUsuario,$fechaCompra,$importe);
    $instPedido->insertarPedido($idPedido,$idApp,$idUsuario,$fechaCompra,$importe);
    Conexion::desconectar();
    echo '
    <script type="text/javascript">
    alert("Pedido realizado")
    </script>
    ';
    header("Location:../webuser.php");

 ?>
