<?php
    require_once("usuarios.php");

    class Aplicaciones extends Usuarios
    {
        private $idApp;
        private $nombre;
        private $version;
        private $tipo;
        private $categoria;
        private $fechaLanz;
        private $disponible;
        private $precio;
        private $descripcion;
        private $autor;
        private $portada;
        private $imagen;
        private $fichero;

        public function __construct($idApp=null,$idUsuario=null,$nombre=null,$version=null,$tipo=null,$categoria=null,$fechaLanz=null,$disponible=null,$precio=null,$descripcion=null,$autor=null,$portada=null,$imagen=null,$fichero=null)
        {
            parent::__construct();
            $this->idApp = $idApp;
            $this->idUsuario = $idUsuario;
            $this->nombre = $nombre;
            $this->version = $version;
            $this->tipo = $tipo;
            $this->categoria = $categoria;
            $this->fechaLanz = $fechaLanz;
            $this->disponible = $disponible;
            $this->precio = $precio;
            $this->descripcion = $descripcion;
            $this->autor = $autor;
            $this->portada = $portada;
            $this->imagen = $imagen;
            $this->fichero = $fichero;
        }

        public function getIdApp()
        {
            return $this->idApp;
        }

        public function setIdApp($idApp)
        {
            $this->idApp = $idApp;
        }

        public function getidUsuario()
        {
            return $this->idUsuario;
        }

        public function setidUsuario($idUsuario)
        {
            $this->idUsuario = $idUsuario;
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

        public function getportada()
        {
            return $this->portada;
        }

        public function setportada($portada)
        {
            $this->portada = $portada;
        }

        public function getimagen()
        {
            return $this->imagen;
        }

        public function setimagen($imagen)
        {
             $this->imagen = $imagen;
        }

        public function getfichero()
        {
            return $this->fichero;
        }

        public function setfichero($fichero)
        {
            $this->fichero = $fichero;
        }


        public function agregarAplicacion($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen,$fichero)
        {
            $agregar = "'$this->idApp','$this->idUsuario','$this->nombre','$this->version','$this->tipo','$this->categoria','$this->fechaLanz','$this->disponible','$this->precio','$this->descripcion','$this->autor','$this->portada','$this->imagen','$this->fichero'";

            $consulta = "insert into aplicaciones values($agregar)";
            mysql_query($consulta);

        }

        public function eliminarAplicacion($idApp)
        {
            $consulta = "delete from aplicaciones where idApp='$this->idApp'";
            mysql_query($consulta);

        }

        public function activarAplicacion($idApp)
        {
            $consulta = "update aplicaciones set disponible='Si' where idApp='$this->idApp'";
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

        public function mostrarAplicacion($nombre,$descripcion,$portada)
        {
            $consulta = "SELECT nombre,descripcion,portada FROM aplicaciones";
            $resultado = mysql_query($consulta);
            while($fila = mysql_fetch_row($resultado))
            {
                $this->nombre = $fila[0];
                $this->descripcion = $fila[1];
                $this->portada = $fila[2];

        echo '
        <div class="col-md-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc">
                    <p style="text-align:center; margin-top:20px;">

                        <img src="'.$this->portada.'" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">'.$this->nombre.'</h3>
                            <p>'.$this->descripcion.'</p>
                            <a class=" btn btn-default" href="producto.php"><span class="glyphicon glyphicon-plus">Ver mas</span></a>

                        </div>
                    </div>
                </div>
              </div>
        ';
            }

        }

    }
