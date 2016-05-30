<?php

    class Usuarios
    {
        private $nick;
        private $nombre;
        private $apellidos;
        private $fechaNac;
        private $rol;
        private $imgPerfil;
        private $correo;
        private $pass;
        private $estado;

        //$nick=null,$nombre,$apellidos,$fechaNac,$nick,$rol,$imgPerfil,$correo,$pass,$estado
        public function __construct($nick=null,$nombre=null,$apellidos=null,$fechaNac=null,$rol=null,$imgPerfil=null,$correo=null,$pass=null,$estado=null)

        {
            $this->nick = $nick;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->fechaNac = $fechaNac;
            $this->rol = $rol;
            $this->imgPerfil = $imgPerfil;
            $this->correo = $correo;
            $this->pass = $pass;
            $this->estado = $estado;
        }

        public function getnick()
        {
            return $this->nick;
        }

        public function setnick($nick)
        {
            $this->nick = $nick;
        }

        public function getnombre()
        {
            return $this->nombre;
        }

        public function setnombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getapellidos()
        {
            return $this->apellidos;
        }

        public function setapellido($apellido)
        {
            $this->apellido = $apellido;
        }

        public function getfechaNac()
        {
            return $this->fechaNac;
        }

        public function setfechaNac($fechaNac)
        {
            $this->fechaNac = $fechaNac;
        }


        public function getrol()
        {
            return $this->rol;
        }

        public function setrol($rol)
        {
            $this->rol = $rol;
        }

        public function getcorreo()
        {
            return $this->correo;
        }

        public function setcorreo($correo)
        {
            $this->correo = $correo;
        }

        public function getpass()
        {
            return $this->pass;
        }

        public function setpass($pass)
        {
            $this->pass = $pass;
        }

        public function getestado()
        {
            return $this->estado;
        }

        public function setestado($estado)
        {
            $this->estado = $estado;
        }

        public function altaUsuario($nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado)
        {
            $agregar = "'$this->nick','$this->nombre','$this->apellidos','$this->fechaNac','$this->rol','$this->imgPerfil','$this->correo','$this->pass','$this->estado'";
            mysql_query("insert into usuarios values($agregar)");


        }

        public function bajaUsuario($nick)
        {
            $consulta = "update usuarios set estado='baja' where nick='$this->nick'";
            mysql_query($consulta);

        }

        public function bloquearUsuario($nick)
        {
            $consulta = "update usuarios set estado='bloqueado' where nick='$this->nick'";
            mysql_query($consulta);
        }

        public function desbloqueoUsuario($nick)
        {
            $consulta = "update usuarios set estado='activo' where nick='$this->nick'";
            mysql_query($consulta);

        }

        public function actualizaUsuarios()
        {

        }

        public function nickUsuario($nick)
        {
            $consulta = "SELECT nick FROM usuarios WHERE nick='$this->nick'";
            $resultado = mysql_query($consulta);
            $posicion = mysql_fetch_row($resultado);
            echo "$resultado";
            /*
            if($posicion[0]==null)
            {
                $posicion[0]="fotos/invitado.jpg";
            }
            */
        }

        public function mostrarUsuarios($nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado)
        {
            $consulta = "SELECT * FROM usuarios";
            $resultado = mysql_query($consulta);

            echo "<table cellspacing='30px'>";
            //Creamos la cabecera
            echo"<tr>
                <th>Seleccion</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Passwd</th>
                <th>Nick</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Estado</th>
                </tr>";

            //Creamos el formulario para añadir los botones de Activar, Baja y Bloquear
            echo "<form method='POST' name='formulario' action ='gestionusuarios.php'>";
            //La variable fila va sacar los atributos de cada usuario, llamandolos por su posicion (Es un array)
            //El bucle while nos va a permitir tratar cada uno de los usuarios.
            while ($fila = mysql_fetch_row($resultado)){
                //Se van a mostrar los atributos que hemos seleccionado dentro de la tabla
                echo "<tr>";
                //El valor de cada checkbox es el atributo nick de cada usuario
                echo"<td><input type='checkbox' name='users[]' value='$fila[5]' class='seleccion'></td>
                    <td><a href='paginapersonal.php?claveusuarios=$fila[0]'>$fila[1]</a></td>
                    <td>$fila[2]</td>
                    <td>$fila[3]</td>
                    <td>$fila[4]</td>
                    <td>$fila[5]</td>
                    <td>$fila[6]</td>
                    <td>$fila[7]</td>
                    <td>$fila[8]</td>
                    </tr>";
            }
            //Cerramos la tabla y el formulario con los botones Activar, Baja y Ver
            echo "</table>";
        }


    }

 ?>
