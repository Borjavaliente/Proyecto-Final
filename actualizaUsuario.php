<?php
require_once("../class/conexion.php");
@session_start();
$nombre = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$nick = $_POST['nick'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$fecha = $_POST['fechaNac'];
$nick =  $_SESSION['nick'];
$rol='usuario';
$estado = 'activo';
Conexion::conectar();

$query = mysql_query("UPDATE usuarios set nick='$nick' , nombre='$nombre' , apellidos='$apellido',fechaNac='$fecha',rol='usuario',imgPerfil='invitado.jpg' ,correo='$correo',pass='$pass',estado = 'activo' where nick='$nick'");
//or mysql_error();
Conexion::desconectar();

echo "Exito";
 ?>
