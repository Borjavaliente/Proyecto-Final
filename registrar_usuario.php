<?php
    include('conexion.php');
    $user= $_POST["usuario"];
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $fecha = $_POST["fechilla"];
	$email=$_POST["email"];
    $passwd=$_POST["passw"];
    echo "procesando...";
    if ($_POST) {
        $query=mysql_query("SELECT * FROM usuario WHERE correo = '$email' and nick = '$user'");
        echo "consulta";
        if(mysql_num_rows($query)>0){
            echo "<script>alert(Usario existente!!)</script>";
        }else{
            $insert = mysql_query("INSERT INTO usuario VALUES(null,'$nombre','$apellido','$fecha','$user','usuario','$email','$passwd','activo')");
            $ordenar=mysql_query("ALTER TABLE usuario AUTO_INCREMENT = 4");
            echo "hasta aqui";
            if($insert){
               echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
               #echo "<center><a href='panel_admin.php'>Volver al Panel</a>";
               header("location: index.html");
            }else{
               echo "No se ingresaron los registros. <br>";
            }
        }
    }
?>
