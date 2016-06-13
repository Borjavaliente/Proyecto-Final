<?php

    //require_once("aplicaciones.php");

    class Ofertas
    {
        private $idOferta;
        private $idApp;
        private $precioOferta;
        private $fechaInicio;
        private $fechaFin;

        public function __construct($idOferta=null,$idApp=null,$precioOferta=null,$fechaInicio=null,$fechaFin=null)
        {

            $this->idOferta = $idOferta;
            $this->idApp = $idApp;
            $this->precioOferta = $precioOferta;
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




        public function agregarOferta($idOferta,$idApp,$precioOferta,$fechaInicio,$fechaFin)
        {
            $insertar = "'$this->idOferta','$this->idApp','$this->precioOferta','$this->fechaInicio','$this->fechaFin'";
            mysql_query("insert into ofertas values($insertar)");


        }

        public function eliminarOferta($idOferta)
        {
            $consulta = "DELETE FROM ofertas WHERE idOferta='$this->idOferta'";
            mysql_query($consulta);

        }

        /*
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

        } */

    }

 ?>
