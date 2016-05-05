<!-- CLASE CONEXIÓN  -->
<?php 

	class Conectar{
		public $servidor; 
		public $usuario; 
		public $pass; 

		public function conectar(){
			$conectar=mysql_connect("localhost",'root',"toor");
			mysql_select_db('biblioteca');
			mysql_set_charset("utf8");
		}

		public function desconectar(){
			mysql_close(); 
		}

	}

?>

