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
            $consulta = "SELECT nombre,descripcion,portada,idApp FROM aplicaciones WHERE disponible='Si'";
            $resultado = mysql_query($consulta);
            while($fila = mysql_fetch_row($resultado))
            {
                $this->nombre = $fila[0];
                $this->descripcion = $fila[1];
                $this->portada = $fila[2];
                $this->idApp = $fila[3];

        echo '
        <div class="col-md-4">
            <form method="POST" action="producto.php">
                <div class="cuadro_intro_hover " style="background-color:#cccccc; margin-left:20%; margin-right: 20%;">
                    <p style="text-align:center; margin-top:20px;">
                        <img src="'.$this->portada.'" class="img-responsive" alt="" name="portada" >
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">'.$this->nombre.'</h3>
                            <p>'.$this->descripcion.'</p>
                            <a class=" btn btn-default" href="producto.php?idApp='.$this->idApp.'"><span class="glyphicon glyphicon-plus">Ver mas</span></a>
                        </div>
                    </div>
                </div>
            </form>
                <br/><br/><br/>
              </div>
        ';

            }


        }

        public function mostrarPortadaCompra($idApp)
        {
            $consulta = "SELECT portada FROM aplicaciones WHERE idApp='$this->idApp'";
            $resultado = mysql_query($consulta);
            while($fila = mysql_fetch_row($resultado))
            {
                $portada = $fila[0];
                echo '
                <div class="col-md-12">
                    <div class="product col-md-12 service-image-left">
                        <img id="item-display" src="'.$portada.'" width="1050" height="320" alt=""></img>
                    </div>
                </div>
                ';

            }

            /*echo '
            <div class="col-md-12">
                <div class="product col-md-12 service-image-left">
                    <img id="item-display" src="'.$portada.'" width="1050" height="320" alt=""></img>
                </div>
            </div>
            ';*/

        }
        public function mostrarDescripcionCompra($idApp){
            $consulta = "SELECT nombre,version,tipo,categoria,fechaLanz,descripcion,precio,autor FROM aplicaciones WHERE idApp='$this->idApp'";
            $resultado = mysql_query($consulta);

            while($fila = mysql_fetch_row($resultado))
            {
                $nombre = $fila[0];
                $version = $fila[1];
                $tipo = $fila[2];
                $categoria = $fila[3];
                $fechaLanz = $fila[4];
                $descripcion = $fila[5];
                $precio = $fila[6];
                $autor = $fila[7];
                echo '
                    Nombre: <strong>'.$nombre.'</strong><br><br>
                    Version: <strong>'.$version.'</strong><br><br>
                    Tipo: <strong>'.$tipo.'</strong><br><br>
                    Categoria: <strong>'.$categoria.'</strong><br><br>
                    Fecha de lanzamiento: <strong>'.$fechaLanz.'</strong><br><br>
                    Descripcion: <strong>'.$descripcion.'</strong><br><br>
                    Precio: <strong>'.$precio.'</strong><br><br>
                    Autor: <strong>'.$autor.'</strong><br><br>
                ';
/*
                echo "<strong>'.$nombre.'</strong><br>";
                echo "<strong>'.$version.'</strong><br>";
                echo "<strong>'.$tipo.'</strong><br>";
                echo "<strong>'.$categoria.'</strong><br>";
                echo "<strong>'.$fechaLanz.'</strong><br>";
                echo "<strong>'.$descripcion.'</strong><br>";
                echo "<strong>'.$precio.'</strong><br>";
                echo "<strong>'.$autor.'</strong><br>";
                */
        }

    }
    public function mostrarAplicacionesAdmin($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen){
        {
            $consulta = "SELECT * FROM aplicaciones ORDER BY idApp DESC";
            mysql_query($consulta);
            $resultado=mysql_query($consulta);
            $num = 0;
            echo "<center>";
            echo "<table border='5'>";
            echo "<tr>";
            echo "<td colspan='13'> <center> <b> Apps </b> </center> </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><b>idApp</b></font><br><br></td>";
            echo "<td><b>idUsuario</b></font><br><br></td>";
            echo "<td><b>nombre</b></font><br><br></td>";
            echo "<td><b>version</b></font><br><br></td>";
            echo "<td><b>tipo</b></font><br><br></td>";
            echo "<td><b>categoria</b></font><br><br></td>";
            echo "<td><b>fechaLanz</b></font><br><br></td>";
            echo "<td><b>disponible</b></font><br><br></td>";
            echo "<td><b>precio</b></font><br><br></td>";
            echo "<td><b>descripcion</b></font><br><br></td>";
            echo "<td><b>autor</b></font><br><br></td>";
            echo "<td><b>portada</b></font><br><br></td>";
            echo "<td><b>imagen</b></font><br><br></td>";
            echo "</tr>";
                while ($fila = mysql_fetch_array($resultado)) {
                    $this->idApp = $fila[0];
                    $this->idUsuario = $fila[1];
                    $this->nombre = $fila[2];
                    $this->version= $fila[3];
                    $this->tipo = $fila[4];
                    $this->categoria = $fila[5];
                    $this->fechaLanz = $fila[6];
                    $this->disponible = $fila[7];
                    $this->precio = $fila[8];
                    $this->descripcion = $fila[9];
                    $this->autor = $fila[10];
                    $this->portada = $fila[11];
                    $this->imagen = $fila[12];
                    echo "<tr>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["idApp"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["idUsuario"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["nombre"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["version"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["tipo"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["categoria"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["fechaLanz"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["disponible"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["precio"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["descripcion"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["autor"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["portada"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["imagen"]."</center>"."</font></td>";
                    echo "</tr>";
                    $num ++;
                }
            echo "</center>";
            echo "<tr>";
            echo "<td><b>Numero de Apps:</b></td>";
            echo "<td colspan='12'><center><b> $num </b></td>";
            echo "</tr>";
            echo "</table>";
        }



    }
    public function ejecutarCompra(){

        //$consulta = "INSERT INTO pedidos VALUES("");
    }
    }
