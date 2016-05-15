<?php

    class Valoraciones extends Aplicaciones{
        private $idValoracion;
        public $fechaResena;
        public $votoPositivo;
        public $votoNegativo;
        public $comentarios;

        public function getIdValoracion(){
            return $this->idValoracion;
        }

        public function setIdValoracion($idValoracion){
            $this->idValoracion = $idValoracion;
        }

        public function __construct($idValoracion,$idApp,$fechaReseña,$votoPositivo,$votoNegativo,$comentarios){
            $this->fechaResena = $fechaResena;
            $this->votoPositivo = $votoPositivo;
            $this->votoNegativo = $votoNegativo;
            $this->comentarios = $comentarios;
        }
    }
    
?>
