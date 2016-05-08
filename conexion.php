<!-- CLASE CONEXIÓN  -->

<?php
/*
	class Conexion{

		public $servidor;
		public $usuario;
		public $pass;
		public $bbdd;

		public function conectar($servidor,$usuario,$pass,$bbdd){
			$this->servidor = $servidor;
			$this->usuario = $usuario;
			$this->pass = $pass;
			$this->bbdd = $bbdd;
			$conectar=mysql_connect($this->servidor,$this->usuario,$this->pass);
			mysql_select_db($this->bbdd);
			mysql_set_charset("utf8");
		}
		public function desconectar(){
			mysql_close();
		}
	}
	$con = new Conexion();
	$con->conectar("localhost", "root", "alumno","tienda");
*/
$link = mysql_connect("localhost", "root", "alumno") or die("No se ha podido establecer la conexion con Biblioteca");
$db=mysql_select_db('tienda');
?>
