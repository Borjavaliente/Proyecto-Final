<?php
    include('conexion.php');
    $idUsuario = null;
    $user= $_POST["usuario"];
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $fecha = $_POST["fechilla"];
	$email=$_POST["email"];
    $passwd=$_POST["passw"];
    $passwd2 = md5($passwd);
    echo "procesando...";
    Conexion::conectar();
    if ($_POST) {
        $query=mysql_query("SELECT * FROM usuario WHERE correo = '$email' and nick = '$user'");
        echo "consulta";
        if(mysql_num_rows($query)>0){
            echo "<script>alert(Usario existente!!)</script>";
        }else{
            $insert = mysql_query("INSERT INTO usuarios VALUES(null,'$user','$nombre','$apellido','$fecha'
                ,'usuario','imgPerfil','$email','$passwd2','activo')");
            $ordenar=mysql_query("ALTER TABLE usuarios AUTO_INCREMENT = 4");
            echo "hasta aqui";
            if($insert){
               echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
               #echo "<center><a href='panel_admin.php'>Volver al Panel</a>";
               header("location: ../index.php");
            }else{
               echo "No se ingresaron los registros. <br>";
            }
        }
    }
    Conexion::desconectar();
?>
