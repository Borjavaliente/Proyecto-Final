<?php
	session_start();
	include('conexion.php');
	$username= $_POST["username"];
	$passwd=$_POST["pass"];
	//session_start();
	//include('apiconexion.php');
	//include('apimd5.php');
	#Si se han fijado los 2 post se conectara con la base de datos
	if($_POST){
		//$passwd1=encriptar($passwd,1);
		#se guarda en una variable la consultaza de mysql
		$consultanick= mysql_query("SELECT nick FROM usuario WHERE nick='$username'") or die(mysql_error());
		$consultapass=mysql_query("SELECT pass FROM usuario WHERE pass='$passwd'") or die(mysql_error());
		$consultarol =mysql_query("SELECT rol FROM usuario") or die(mysql_error());
		if($consultapass==$passwd && $consultanick==$nick && $consultarol=='admin'){
			#Se redirige a la web del admin
			header('Location:webadmin.php');
			$_SESSION['rol']=$consultarol;
			$_SESSION['nick']=$username;
		}
		if($consultapass==$passwd && $consultanick==$nick && $consultarol=='usuario'){
			#Se redirige a la web del usuario
			header('Location:webuser.php');
			$_SESSION['rol']=$consultarol;
			$_SESSION['nick']=$username;
		}
		//else{
		//	header('Location:index.php');
		//}
		//desconectar();
	}
 ?>
