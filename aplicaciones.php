<?php

    class Aplicaciones
    {
        private $idApp;
        private $nombre;
        private $version;
        private $tipo;
        private $categoria;
        private $fechaLanz;
        private $disponible;
        private $precio;
        private $aprobado;
        private $descripcion;
        private $autor;

        public function __construct($idApp=null,$nombre=null,$version=null,$tipo=null,$categoria=null,$fechaLanz=null,$disponible=null,$precio=null,$aprobado=null,$descripcion=null,$autor=null)
        {
            $this->idApp = $idApp;
            $this->nombre = $nombre;
            $this->version = $version;
            $this->tipo = $tipo;
            $this->categoria = $categoria;
            $this->fechaLanz = $fechaLanz;
            $this->disponible = $disponible;
            $this->precio = $precio;
            $this->aprobado = $aprobado;
            $this->descripcion = $descripcion;
            $this->autor = $autor;
        }

        public function getIdApp()
        {
            return $this->idApp;
        }

        public function setIdApp($idApp)
        {
            $this->idApp = $idApp;
        }

        public function getnombre()
        {
            return $this->nombre;
        }

        public function setnombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getversion()
        {
            return $this->version;
        }

        public function setversion($version)
        {
            $this->version = $version;
        }

        public function gettipo()
        {
            return $this->tipo;
        }

        public function settipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getcategoria()
        {
            return $this->categoria;
        }

        public function setcategoria($categoria)
        {
            $this->categoria = $categoria;
        }

        public function getfechaLanz()
        {
            return $this->fechaLanz;
        }

        public function setfechaLanz($fechaLanz)
        {
            $this->fechaLanz = $fechaLanz;
        }

        public function getdisponible()
        {
            return $this->disponible;
        }

        public function setdisponible($disponible)
        {
            $this->disponible = $disponible;
        }

        public function getprecio()
        {
            return $this->precio;
        }

        public function setprecio($precio)
        {
            $this->precio = $precio;
        }

        public function getaprobado()
        {
            return $this->aprobado;
        }

        public function setaprobado($aprobado)
        {
            $this->aprobado = $aprobado;
        }

        public function getdescripcion()
        {
            return $this->descripcion;
        }

        public function setdescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function getautor()
        {
            return $this->autor;
        }

        public function setautor($autor)
        {
            $this->autor = $autor;
        }



        public function agregarAplicacion($idApp,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$aprobado,$descripcion,$autor)
        {
            $agregar = "'$this->idApp','$this->nombre','$this->version','$this->tipo','$this->categoria','$this->fechaLanz','$this->disponible','$this->precio','$this->aprobado','$this->descripcion','$this->autor'";


            //Ejecuto la consulta para insertar en la talba usuarios al nuevo usaurio
            mysql_query("insert into aplicaciones values($agregar)");

        }

        public function eliminarAplicacion($idApp)
        {
            $consulta = "delete from aplicaciones where idApp='$this->idApp'";
            mysql_query($consulta);

        }

        public function bloquearAplicacion($idApp)
        {
            $consulta = "update aplicaciones set disponible='No' where idApp='$this->idApp'";
            mysql_query($consulta);
        }

        public function mostrarDescripcion($descripcion)
        {
            $consulta = "select descripcion from aplicaciones where idApp='$this->idApp'";
            $resultado = mysql_query($consulta);
        }

    }
