<?php

    //include("aplicaciones.php");

    class Pedidos
    {
        private $idPedido;
        private $idApp;
        private $idUsuario;
        private $fechaCompra;
        private $importe;

        public function __construct($idPedido=null,$idApp=null,$idUsuario=null,$fechaCompra=null,$importe=null)
        {
            $this->idPedido = $idPedido;
            $this->idApp = $idApp;
            $this->idUsuario = $idUsuario;
            $this->fechaCompra = $fechaCompra;
            $this->importe = $importe;
        }

        public function getidpedido()
        {
            return $this->idPedido;
        }

        public function setidpedido($idPedido)
        {
            $this->idPedido = $idPedido;
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

        public function getfechaCompra()
        {
            return $this->fechaCompra;
        }

        public function setfechaCompra($fechaCompra)
        {
            $this->fechaCompra = $fechaCompra;
        }

        public function getimporte()
        {
            return $this->importe;
        }

        public function setimporte($importe)
        {
            $this->importe = $importe;
        }

        public function insertarPedido($idPedido,$idApp,$idUsuario,$fechaCompra,$importe)
        {
            $consulta = "INSERT INTO pedidos VALUES('$this->idPedido','$this->idApp','$this->idUsuario','$this->fechaCompra','$this->importe')";
            mysql_query($consulta);

        }

        public function mostrarPedidos($idPedido,$idApp,$fechaCompra,$importe)
        {
            $consulta = "SELECT * FROM pedidos ORDER BY fechaCompra DESC";
            mysql_query($consulta);
            $resultado=mysql_query($consulta);
            $num = 0;
            echo "<center>";
            echo "<table border='5'>";
            echo "<tr>";
            echo "<td colspan='4'> <center> <b> Pedidos </b> </center> </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><b>idPedido</b></font><br><br></td>";
            echo "<td><b>idApp</b></font><br><br></td>";
            echo "<td><b>fechaCompra</b></font><br><br></td>";
            echo "<td><b>Importe</b></font><br><br></td>";
            echo "</tr>";
                while ($fila = mysql_fetch_array($resultado)) {
                    $this->idPedido = $fila[0];
                    $this->idApp = $fila[1];
                    $this->fechaCompra = $fila[2];
                    $this->importe = $fila[3];
                    echo "<tr>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["idPedido"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["idApp"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["fechaCompra"]."</center>"."</font></td>";
                    echo "<td width=\"25%\"><font face = \"Verdana\">" . "<center>" . $fila["importe"]."</center>"."</font></td>";
                    echo "</tr>";
                    $num ++;
                }
            echo "</center>";
            echo "<tr>";
            echo "<td><b>Numero de pedidos:</b></td>";
            echo "<td colspan='3'><center><b> $num </b></td>";
            echo "</tr>";
            echo "</table>";
        }
    }

 ?>
