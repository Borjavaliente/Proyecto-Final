<?php
include('../class/conexion.php');
include('../class/contactos.php');
//require('../class/phpmailer/class.phpmailer.php');
//require('../class/phpmailer/class.smtp.php');
$idContacto = null;
$nombre = $_POST['nome'];
$email = $_POST['email'];
$asunto = $_POST['assunto'];
$mensaje = $_POST['mensagem'];

Conexion::conectar();
$instcontacto = new Contactos($idContacto,$nombre,$email,$asunto,$mensaje);
$instcontacto->insertarcontacto($idContacto,$nombre,$email,$asunto,$mensaje);
Conexion::desconectar();

if ($instcontacto) {
    header("Location: ../webuser.php");
} else {
    echo "mal";
}


/*
$cabeceras = 'From:' . '$para' . "\r\n" .
    'Reply-To: juanitomaravilla.prueba@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("juanitomaravilla.prueba@gmail.com", $titulo, $mensaje, $cabeceras);

header("Location: ../webuser.php");

mail("juanitomaravilla.prueba@gmail.com,juanitomaravilla.prueba@gmail.com","asuntillo","Este es el cuerpo del mensaje");

 //
*/


 // Información para configuracion
 /*
 $mail = new PHPMailer();

     $mail->From     = 'juanitomaravilla.prueba@gmail.com';
     $mail->FromName = 'Equipo Nautilus';
     $mail->AddAddress($para); // Dirección a la que llegaran los mensajes.

 // Aquí van los datos que apareceran en el correo que reciba

 $mail->WordWrap = 50;
 $mail->IsHTML(true);
 $mail->Subject  =  "Greetings, $nombre, usted se ha registrado en Proyecto Nautilus.
 Aqui encontraras la informacion de registro"; // Asunto del mensaje.
 $mail->Body     =  "Nombre de Usuario: $nombre \n<br />
 Correo de Registro: $para \n<br />
 Gracias por Registrarte, que pase buen dia.".    // Email del usuario

 // Datos del servidor SMTP, podemos usar el de Google, Outlook, etc...
     $mail->IsSMTP();
     $mail->Host = 'smtp.gmail.com:25';  // Servidor de Salida. 465 es uno de los puertos que usa Google para su servidor SMTP
     $mail->SMTPAuth = true;
     $mail->Username = 'juanitomaravilla.prueba@gmail.com';  // Correo Electrónico
     $mail->Password = 'melilla69'; // Contraseña del correo

     if( ! $mail->Send() )
     {
         echo "No se pudo enviar el Mensaje.";
         echo "<br><br><br>";
         echo $mail->ErrorInfo;
     }
     else
     {
         echo "";
     email
*/
 ?>
