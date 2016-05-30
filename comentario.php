<?php
    include("class/conexion.php");

    class Comentarios
    {
        private $idComentario;
        private $idApp;
        private $idUsuario;
        private $nick;
        private $fecha;
        private $comentario;
        private $activo;

        public function __construct($idComentario=null,$idApp=null,$idUsuario=null,$nick=null,$fecha=null,$comentario=null,$activo=null)
        {
            $this->idComentario = $idComentario;
            $this->idApp = $idApp;
            $this->idUsuario = $idUsuario;
            $this->nick = $nick;
            $this->fecha = $fecha;
            $this->comentario = $comentario;
            $this->activo = $activo;
        }

        public function getidComentario()
        {
            return $this->idComentario;
        }

        public function setidComentario($idComentario)
        {
            $this->idComentario = $idComentario;
        }

        public function getidApp()
        {
            return $this->idApp;
        }

        public function setidApp($idApp)
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

        public function getnick()
        {
            return $this->nick;
        }

        public function setnick($nick)
        {
            $this->nick = $nick;
        }

        public function getfecha()
        {
            return $this->fecha;
        }

        public function setfecha($fecha)
        {
            return $this->fecha = $fecha;
        }

        public function getcomentario()
        {
            return $this->comentario;
        }

        public function setcomentario($comentario)
        {
            $this->comentario = $comentario;
        }

        public function getactivo()
        {
            return $this->activo;
        }

        public function setactivo($activo)
        {
            $this->activo = $activo;
        }

        public function insertarComentario($idComentario,$idApp,$idUsuario,$nick,$fecha,$comentario,$activo)
        {
            $insertar = "'$idComentario','$idapp','$idUsuario','$nick','$fecha','$comentario',$activo";
            Conexion::conectar();
            mysql_query("insert into comentarios values($insertar)");
            Conexion::desconectar();
        }
        public function eliminarComentario()
        {
            Conexion::conectar();
            $consulta = "delete from comentarios where idUsuario='$this->idUsuario'";
            mysql_query($consulta);
        }
        public function bloquearComentario()
        {
            Conexion::conectar();
            $consulta = "update comentarios set activo=0";
            mysql_query($consulta);
            Conexion::desconectar();
        }
    }

 ?>
