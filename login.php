<?php
	session_start();
	include('conexion.php');

	session_start();
	include('apiconexion.php');
	//include('apimd5.php');
	#Si se han fijado los 2 post se conectara con la base de datos
	if(isset($_POST['username'])&& isset($_POST['passwd'])){
		$username= $_POST["username"];
		$passwd=$_POST["passwd"];
		$passwd1=encriptar($passwd,1);
		conectar();
		#se guarda en una variable la consulata de mysql
		$consulta= mysql_query("SELECT * FROM Usuario WHERE nick='$username' and pass= '$passwd1'");
		$fila=mysql_fetch_row($consulta);
		if($fila[0]==$passwd1 && $fila[1]==$nick && $fila[2]=='admin'){
			#Se redirige a la web del admin
			header('Location:webadmin.php');
			$_SESSION['rol']=$fila[2];
		}
		else if($fila[0]==$passwd1 && $fila[1]==$nick && $fila[2]=='usuario'){
			#Se redirige a la web del usuario
			header('Location:webuser.php');
			$_SESSION['rol']=$fila[2];
		}
		else{
			header('Location:index.php');
		}
		desconectar();
	}
 ?>
