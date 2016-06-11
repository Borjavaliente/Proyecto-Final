<?php

    //require_once("aplicaciones.php");

    class Ofertas
    {
        private $idOferta;
        private $idApp;
        private $precioOferta;
        private $fechaInicio;
        private $fechaFin;
        private $precioNuevo;

        public function __construct($idOferta=null,$idApp=null,$precioOferta=null,$fechaInicio=null,$fechaFin=null,$precioNuevo=null)
        {
            //parent::__construct();
            $this->idOferta = $idOferta;
            $this->idApp = $idApp;
            $this->precioOferta = $precioOferta;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
            $this->precioNuevo = $precioNuevo;

        }

        public function getidOferta()
        {
            return $this->idOferta;
        }

        public function setidOferta($idOferta)
        {
            $this->idOferta = $idOferta;
        }

        public function getidApp()
        {
            return $this->idApp;
        }

        public function setidApp($idApp)
        {
            $this->idApp = $idApp;
        }


        public function getprecioOferta()
        {
            return $this->precioOferta;
        }

        public function setprecioOferta($precioOferta)
        {
            $this->precioOferta = $precioOferta;
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
        public function getprecioNuevo()
        {
            return $this->precioNuevo;
        }

        public function setprecioNuevo($precioNuevo)
        {
            $this->precioNuevo = $precioNuevo;
        }

        public function agregarOferta($idOferta,$idApp,$precioOferta,$fechaInicio,$fechaFin,$precioNuevo)
        {
            //$this->fechaInicio = date("Y-m-d");
            //$this->fechaFin = date("Y-m-d");
            $insertar = "'$this->idOferta','$this->idApp','$this->precioOferta','$this->fechaInicio','$this->fechaFin','$this->precioNuevo'";
            mysql_query("insert into ofertas values($insertar)");

        }

        public function eliminarOferta($idOferta,$precioNuevo)
        {
            $consulta = "DELETE FROM ofertas WHERE idApp='$this->idOferta'";
            $consultilla = "SELECT idApp FROM ofertas WHERE idOferta = '$this->idOferta'";
            mysql_query($consulta);
            $var = mysql_query($consultilla);
            $consultaza = "UPDATE aplicaciones SET precio=$this->precioNuevo";
            mysql_query($consultaza);
        }


        public function triggerAgregarOferta($idApp)
        {
            $consulta = "SELECT precioOferta FROM ofertas WHERE idApp='$this->idApp'";
            $resultado = mysql_query($consulta);
            while($fila = mysql_fetch_row($resultado))
            {
                $precioOferta = $fila[0];

            }
            $trigger = "
            CREATE TRIGGER insertaOferta AFTER INSERT ON ofertas
            FOR EACH ROW
            UPDATE aplicaciones SET precio = precio*$precioOferta/100 WHERE idApp='$this->idApp'
            ";
            mysql_query($trigger);

        }

        public function triggerEliminarOferta($idApp)
        {

            $trigger = "
            CREATE TRIGGER eliminarOferta AFTER DELETE ON ofertas
            FOR EACH ROW
            UPDATE aplicaciones SET precio = OLD.precio WHERE idApp='$this->idApp'
            ";
            mysql_query($trigger);

        }

    }

 ?>
