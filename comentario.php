<?php

    class Comentarios
    {
        private $idComentario;
        private $idApp;
        private $idUsuario;
        private $fecha;
        private $comentario;

        public function __construct($idComentario=null,$idApp=null,$idUsuario=null,$fecha=null,$comentario=null)
        {
            $this->idComentario = $idComentario;
            $this->idApp = $idApp;
            $this->idUsuario = $idUsuario;
            $this->fecha = $fecha;
            $this->comentario = $comentario;
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


        public function insertarComentario($idComentario,$idApp,$idUsuario,$fecha,$comentario)
        {
            $insertar = "'$this->idComentario','$this->idApp','$this->idUsuario','$this->fecha','$this->comentario'";
            mysql_query("insert into comentarios values($insertar)");

        }

        /*
        public function mostrarComentarios($idComentario)
        {
            $consulta = "SELECT DISTINCT comentario, fecha, nick, imgPerfil FROM comentarios c, usuarios u WHERE c.$this->idComentario=u.$this->idComentario ORDER BY fecha DESC";
            $resultado=mysql_query($consulta);
            while ($fila = mysql_fetch_row($resultado)) {
                $comentario = $fila[0];
                $fecha = $fila[1];
                $nick = $fila[2];
                $imgPerfil = $fila[3];

                echo '
                       <div class="comments-list">
                               <p class="pull-right"><small>'$fecha'</small></p>
                                <a class="media-left" href="#">
                                  <img src="'$imgPerfil'" width="200px" height="100px" >
                                </a>
                                <div class="media-body">
                                  <h4 class="media-heading user_name">'$nick'</h4>
                                  '$comentario'

                                  <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                                </div>
                       </div>';
            }

        }

        /*
        public function eliminarComentario()
        {
            $consulta = "delete from comentarios where idUsuario='$this->idUsuario'";
            mysql_query($consulta);

        }

        public function bloquearComentario()
        {
            $consulta = "update comentarios set activo=0";
            mysql_query($consulta);
        }
        */
    }


 ?>
