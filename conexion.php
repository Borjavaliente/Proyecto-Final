<?php
    class Conexion{
        private $usuario;
        private $host;
        private $pass;

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getHost(){
            return $this->host;
        }

        public function setHost(){
            $this->host = $host;
        }

        public function getPass(){
            return $this->pass;
        }

        public function setPass(){
            $this->pass = $pass;
        }


        public function __construct(){
            //Codigo para el Constructor...
            $this->usuario = "root";
            $this->host = "localhost";
            $this->pass = "toor";
        }
    }
?>
