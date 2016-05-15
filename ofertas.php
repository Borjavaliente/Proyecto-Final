<?php
    include "clases/usuario.php";
    class Ofertas extends Usuario,Aplicaciones{
        private $idOferta;
        public $fechaLanzamiento;
        public $fechaFinalizacion;
    }

    public function getIdOferta(){
        return $this->idOferta;
    }

    public function setIdOferta($idOferta){
        $this->idOferta = $idOferta; 
    }

    public function __construct($idOferta,$idUsuario,$idApp,$fechaLanzamiento,$fechaFinalizacion){
        $this->fechaLanzamiento = $fechaLanzamiento;
        $this->fechaFinalizacion = $fechaFinalizacion;

    }
?>
