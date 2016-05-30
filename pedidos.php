<?php

    include("class/usuarios.php");
    include("class/aplicaciones.php");

    class Pedidos extends Usuarios, Aplicaciones,Conexion
    {
        private $idCompra;
        private $fechaCompra;
        private $total;

        public function getidCompra()
        {
            return $this->idCompra;
        }

        public function setidCompra($idCompra)
        {
            $this->idCompra = $idCompra;
        }

        public function getfechaCompra()
        {
            return $this->fechaCompra;
        }

        public function setfechaCompra($fechaCompra)
        {
            $this->fechaCompra = $fechaCompra;
        }

        public function gettotal()
        {
            return $this->total;
        }

        public function settotal($total)
        {
            $this->total = $total;
        }

        public function __construct()
        {
            //Codigo...
        }
    }

    $instPedidos = new Pedidos;

 ?>
