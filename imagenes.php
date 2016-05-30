<?php

    include("class/conexion.php");
    include("class/aplicaciones.php");

    class Imagenes extends Aplicaciones,Conexion
    {
        private $idimagen;
        private $ruta;
        private $descripcion;

        public function getidimagen()
        {
            return $this->idimagen;
        }

        public function setidimagen($idimagen)
        {
            $this->idimagen = $idimagen;
        }

        public function getruta()
        {
            return $this->ruta;
        }

        public function setruta($ruta)
        {
            $this->ruta = $ruta;
        }

        public function getdescripcion()
        {
            return $this->descripcion;
        }

        public function setdescripcion()
        {
            $this->descripcion = $descripcion;
        }

        public function __construct()
        {
            //Codigo...
        }

        /**
         * METODOS DE LA CLASE IMAGENES
         */

        public function subirimagen($idImagen,$idApp,$ruta,$descripcion)
        {
            $agregar = "'$this->idImagen','$this->idApp','$this->ruta','$this->descripcion'";
            $consulta = "insert into imagenes values($agregar)";
            mysql_query($consulta);
        }

        public function eliminarImagen($idImagen)
        {
            $consulta = "delete from imagenes where idImagen='$this->idImagen'";
        }

        public function anadirDescripcion()
        {
            
        }
    }

 ?>
