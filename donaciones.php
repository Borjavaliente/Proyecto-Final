<?php
//require_once("usuarios.php");
    class Donaciones
    {
        private $idDonaciones;
        private $fechaDonacion;
        private $importe;
        private $idUsuario;

        public function __construct($idDonaciones=null,$fechaDonacion=null,$importe=null,$idUsuario=null)
        {
            $this->idDonaciones = $idDonaciones;
            $this->fechaDonacion = $fechaDonacion;
            $this->importe = $importe;
            $this->idUsuario = $idUsuario;

        }

        public function getidDonaciones()
        {
            return $this->idDonaciones;
        }

        public function setidDonaciones($idDonaciones)
        {
            $this->idDonaciones = $idDonaciones;
        }

        public function getfechaDonacion()
        {
            return $this->fechaDonacion;
        }

        public function setfechaDonacion($fechaDonacion)
        {
            $this->fechaDonacion = $fechaDonacion;
        }

        public function getimporte()
        {
            return $this->importe;
        }

        public function setimporte($importe)
        {
            $this->importe = $importe;
        }

        public function getidUsuario()
        {
            return $this->idUsuario;
        }

        public function setidUsuario($idUsuario)
        {
            $this->idUsuario = $idUsuario;
        }

        public function agregarDonacion($idDonaciones,$fechaDonacion,$importe,$idUsuario)
        {
            $agregar = "'$this->idDonaciones','$this->fechaDonacion','$this->importe',$this->idUsuario";
            $consulta = "INSERT INTO donaciones VALUES($agregar)";
            mysql_query($consulta);



        }


    }
 ?>
