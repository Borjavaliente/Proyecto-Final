<?php
include("../class/conexion.php");
session_start();

$nick = $_SESSION['nick'];

Conexion::conectar();
$consulta = "SELECT imgPerfil FROM usuarios WHERE nick='$nick'";
$resultado = mysql_query($consulta);
$posicion = mysql_fetch_row($resultado);

if($posicion[0]==null)
{
    $posicion[0]="fotos/invitado.jpg";
}
Conexion::desconectar();

?>
