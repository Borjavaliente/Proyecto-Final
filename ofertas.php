<?php

    require_once("aplicaciones.php");

    class Ofertas extends Aplicaciones
    {
        public $idOferta;
        public $porcentaje;
        public $fechaInicio;
        public $fechaFin;

        public function __construct($idOferta,$porcentaje,$fechaInicio,$fechaFin)
        {
            $this->idOferta = $idOferta;
            $this->porcentaje = $porcentaje;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;

        }

        public function getidOferta()
        {
            return $this->idOferta;
        }

        public function setidOferta($idOferta)
        {
            $this->idOferta = $idOferta;
        }

        public function getporcentaje()
        {
            return $this->porcentaje;
        }

        public function setporcentaje($porcentaje)
        {
            $this->porcentaje = $porcentaje;
        }


        public function getfechaInicio()
        {
            return $this->fechaInicio;
        }

        public function setfechaInicio($fechaInicio)
        {
            $this->fechaInicio = $fechaInicio;
        }

        public function getfechaFin()
        {
            return $this->fechaFin;
        }

        public function setfechaFin($fechaFin)
        {
            $this->fechaFin = $fechaFin;
        }

        public function agregarOferta($idOferta,$idApp,$porcentaje,$fechaInicio,$fechaFin)
        {
            $agregar = "'$this->idOferta','$this->idApp','$this->porcentaje','$this->fechaInicio','$fechaFin'";
            $consulta = "insert into ofertas values($agregar)";
            mysql_query($consulta);
        }

        public function eliminarOferta($idOferta)
        {
            $consulta = "delete from ofertas where idOferta='$this->idOferta'";
            mysql_query($consulta);
        }


    }

 ?>
