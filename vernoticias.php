<?php include("header.php") ?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<br><br><br><br><br>
<?php
include("class/noticias.php");

@$titulo = $_POST['titulo'];
@$contenido = $_POST['mensaje'];
@$portada = $_POST['portada'];
@$fechapublicacion = $_POST['fechapublicacion'];
Conexion::conectar();
$consulta = "SELECT portada FROM noticias where titulo='$titulo'";
$resultado = mysql_query($consulta);
$fila = mysql_fetch_row($resultado);
$portada = $fila[0];
Conexion::desconectar();

echo $portada;

Conexion::conectar();
$instNoticia = new Noticia($titulo,$contenido,$portada,$fechapublicacion);
$instNoticia->mostrarNoticia($titulo,$contenido,$portada,$fechapublicacion);
Conexion::desconectar();
 ?>
<br><br><br><br><br>
<?php include("footer.php") ?>
