<?php
	session_start();
	include('conexion.php');
	$username= $_POST["username"];
	$passwd=$_POST["pass"];
	$contrasenacod=md5($passwd);
	//session_start();
	//include('apiconexion.php');
	//include('apimd5.php');
	#Si se han fijado los 2 post se conectara con la base de datos
	if ($_POST) {
		# code...
		$query =mysql_query("SELECT * FROM usuario WHERE nick='$username' and pass='$passwd'");
		$query2 = mysql_query("SELECT * FROM usuario WHERE nick='$username' and pass='$contrasenacod'");
		$numrows = mysql_num_rows($query);
		$numrows2 = mysql_num_rows($query2);
	}
	if ($numrows!=0){
	  //bucle while que pilla todas las lineas de la consulta y las almacena como $row.
	    while ($row = mysql_fetch_assoc($query)){
	      session_start();
	      $_SESSION['estadousuario']= $row['estado'];
	      $comprobarbaneo=$_SESSION['estadousuario'];
	      $_SESSION['rolusuario'] = $row['rol'];
	      $compruebarol = $_SESSION['rolusuario'];
	      #if ($comprobarbaneo =='bloqueado') {
	        # header('./img/baneado.html');
	      #}
	      if ($compruebarol == 'admin') {
	        $_SESSION['rolusuario'] = 'admin';
	        header("location: webadmin.php");
	      }
	      if ($compruebarol == 'usuario') {
	        $_SESSION['rolusuario'] = 'usuario';
	        header("location: webuser.php");
	      }
	      //(se inicia la sesion para almacenar variables de sesion).
	      //A partir de este punto, esta claro que quien ha hecho login es un usuario
	      //valido de la tabla.
	      //Se almacenan todas las variables de sesion, almacenados en las filas de la consulta.
	      //para obtener una fila es con la sintaxis:
	      //$row['nombredelafiladelatabla']
	      //($row porque es la variable que almacena las filas, que se definen en el while).
	      //-----------------------------------------------------------------------------------
	    }
	  }
	  if ($numrows2!=0) {
	    while ($row = mysql_fetch_assoc($query2)){
	      session_start();
	      $_SESSION['estadousuario']= $row['estado'];
	      $comprobarbaneo=$_SESSION['estadousuario'];
	      $_SESSION['rolusuario'] = $row['rol'];
	      $compruebarol = $_SESSION['rolusuario'];
	      #if ($comprobarbaneo =='bloqueado') {
	        #redirect('baneado.html');
	      #}
	      }
	      if ($compruebarol == 'admin') {
	        header("location: webadmin.php");
	      }
	      if ($compruebarol != 'admin') {
	        header("location: webuser.php");
	      }
	      //-----------------------------------------------------------------------------------
	  }











 ?>
