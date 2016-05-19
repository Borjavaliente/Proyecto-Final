<?php
    include "clases/usuario.php";

    class GestionaUsuario extends Usuario{
        private $idGestion;
        public $fechaAlta;
        public $fechaBaja;
        public $fechaBloqueo;

        public function getIdGestion(){
            return $this->idGestion;
        }

        public function setIdGestion($idGestion){
            $this->idGestion = $idGestion;
        }

        public function __construct($idGestion,$idUsuario,$fechaAlta,$fechaBaja,$fechaBloqueo){
            $this->fechaAlta = $fechaAlta;
            $this->fechaBaja = $fechaBaja;
            $this->fechaBloqueo = $fechaBloqueo;
        }
    }
?>
