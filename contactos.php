<?php
class Contactos
{
    private $idContacto;
    private $nombre;
    private $email;
    private $asunto;
    private $mensaje;

    public function __construct($idContacto=null,$nombre=null,$email=null,$asunto=null,$mensaje=null)
    {
        $this->idContacto = $idContacto;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    public function getidContacto()
    {
        return $this->idContacto;
    }

    public function setidContacto($idContacto)
    {
        $this->idContacto = $idContacto;
    }

    public function getnombre()
    {
        return $this->nombre;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getasunto()
    {
        return $this->asunto;
    }

    public function setasunto($asunto)
    {
        $this->asunto = $asunto;
    }

    public function getmensaje()
    {
        return $this->mensaje;
    }

    public function setmensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function insertarcontacto($idContacto,$nombre,$email,$asunto,$mensaje)
    {
        $agregar = "'$this->idContacto','$this->nombre','$this->email','$this->asunto','$this->mensaje'";
        $consulta = "INSERT INTO contactos VALUES($agregar)";
        mysql_query($consulta);

    }
    public function mostrarCorreos($idContacto,$nombre,$email,$asunto,$mensaje)
    {
        $consulta = "SELECT * FROM contactos ORDER BY idContacto DESC";
        mysql_query($consulta);
        $resultado=mysql_query($consulta);
        $num = 0;
        echo "<center>";
        echo "<table border='5'>";
        echo "<tr>";
        echo "<td colspan='6'> <center> <b> Correos </b> </center> </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><b>idContacto</b></font><br><br></td>";
        echo "<td><b>nombre</b></font><br><br></td>";
        echo "<td><b>email</b></font><br><br></td>";
        echo "<td><b>asunto</b></font><br><br></td>";
        echo "<td><b>mensaje</b></font><br><br></td>";
        echo "</tr>";
            while ($fila = mysql_fetch_row($resultado)) {
                $this->idContacto = $fila[0];
                $this->nombre = $fila[1];
                $this->email = $fila[2];
                $this->asunto = $fila[3];
                $this->mensaje = $fila[4];
                echo "<tr>";
                echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila[0]."</center>"."</font></td>";
                echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila[1]."</center>"."</font></td>";
                echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila[2]."</center>"."</font></td>";
                echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila[3]."</center>"."</font></td>";
                echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila[4]."</center>"."</font></td>";
                echo "</tr>";
                $num ++;
            }
        echo "</center>";
        echo "<tr>";
        echo "<td><b>Numero de pedidos:</b></td>";
        echo "<td colspan='5'><center><b> $num </b></td>";
        echo "</tr>";
        echo "</table>";
    }
}
?>
