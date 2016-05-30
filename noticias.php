<?php

    class Noticias {

        private $idNoticia;
        private $titulo;
        private $contenido;
        private $fechapublicacion;

    public function __construct($idNoticia=null,$titulo=null,$contenido=null,$fechapublicacion=null){

        $this->idNoticia = $idNoticia;
        $this->titulo = $titulo;
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

    public function insertarNoticia($idNoticia,$titulo,$contenido,$fechapublicacion)
    {
        $insertar = "'$this->idNoticia','$this->titulo','$this->contenido','NOW()'";
        Conexion::conectar();
        mysql_query("insert into noticias values('$this->idNoticia','$this->titulo','$this->contenido','NOW()')");
        Conexion::desconectar();
    }
    public function mostrartituloNoticia($titulo){

        $consulta = "SELECT titulo FROM noticias WHERE idNoticia='$this->idNoticia'";
        $resultado = mysql_query($consulta);
        $posicion = mysql_fetch_row($resultado);
        echo $resultado[0];
    }
    public function mostrarcontenidoNoticia($contenido){

        $consulta = "SELECT contenido FROM noticias WHERE idNoticia='$this->idNoticia'";
        $resultado = mysql_query($consulta);
        $posicion = mysql_fetch_row($resultado);
        echo "$resultado";
    }
    }
 ?>
