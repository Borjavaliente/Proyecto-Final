<?php

    class Noticia {

        private $idNoticia;
        private $titulo;
        private $portada;
        private $contenido;
        private $fechapublicacion;

    public function __construct($idNoticia=null,$titulo=null,$portada=null,$contenido=null,$fechapublicacion=null)
    {

        $this->idNoticia = $idNoticia;
        $this->titulo = $titulo;
        $this->portada = $portada;
        $this->contenido = $contenido;
        $this->fechapublicacion = $fechapublicacion;

    }

    public function getidNoticia()
    {
        return $this->idNoticia;
    }

    public function setidNoticia($idNoticia)
    {
        $this->idNoticia = $idNoticia;
    }

    public function gettitulo()
    {
        return $this->titulo;
    }

    public function settitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getportada()
    {
        return $this->portada;
    }

    public function setportada($portada)
    {
        $this->portada = $portada;
    }

    public function getcontenido()
    {
        return $this->contenido;
    }

    public function setcontenido($contenido)
    {
        $this->contenido = $contenido;
    }
    public function getfechapublicacion(){

        return $this -> $fechapublicacion;
    }
    public function setfechapublicacion($fechapublicacion){
        $this -> $fechapublicacion;
    }

    public function insertarNoticia($idNoticia,$titulo,$portada,$contenido,$fechapublicacion)
    {
        $insertar = "'$this->idNoticia','$this->titulo','$this->contenido','$this->portada','$this->fechapublicacion'";
        mysql_query("insert into noticias values('$this->idNoticia','$this->titulo','$this->portada','$this->contenido','$this->fechapublicacion')");
    }

    public function mostrarNoticia($titulo,$contenido,$portada,$fechapublicacion)
    {
        $consulta = "SELECT titulo,contenido,portada,fechapublicacion FROM noticias";
        $resultado = mysql_query($consulta);
        while($fila = mysql_fetch_row($resultado))
        {
            $this->titulo = $fila[0];
            $this->contenido = $fila[1];
            $this->portada = $fila[2];
            $this->fechapublicacion = $fila[3];
            echo '
            <div class="container">
              <div class="well">
                  <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="'.$this->portada.'" width="200px" height="200px">
                        <br><br><center><p>'.$this->fechapublicacion.'</p></center>
                    </a>
                    <div class="media-body">
                        <h3 class="media-heading" style="text-align:center">'.$this->titulo.'</h3><br>
                      <p>'.$this->contenido.'</p>

                   </div>
                </div>
              </div>
            </div>
            ';

        }

    }

    }

 ?>
