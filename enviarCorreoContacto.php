<?php
include('../class/conexion.php');
$para      = $_POST['email'];
$titulo    = $_POST['assunto'];
$mensaje   = $_POST['mensagem'];
$cabeceras = 'From:' . '$para' . "\r\n" .
    'Reply-To: juanitomaravilla.prueba@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("juanitomaravilla.prueba@gmail.com", $titulo, $mensaje, $cabeceras);

header("Location: ../webuser.php");

//mail("juanitomaravilla.prueba@gmail.com,juanitomaravilla.prueba@gmail.com","asuntillo","Este es el cuerpo del mensaje");

 ?>
