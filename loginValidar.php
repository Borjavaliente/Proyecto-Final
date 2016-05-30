<?php

    require_once("../class/conexion.php");
    session_start();
    if(isset($_POST['username']) && isset($_POST['pass']))
    {
        $nick = $_POST['username'];
        $pass = $_POST['pass'];
        $_SESSION['username'] = $_POST['username'];

        Conexion::conectar();
        $consulta = mysql_query("select pass,nick,rol,estado,imgPerfil,correo from usuarios where nick='$nick'");
        $fila = mysql_fetch_row($consulta);
        $consulta2 = mysql_query("select correo from usuarios where nick='$nick'");

        $estado = $fila[3];
        Conexion::desconectar();
        if($estado == 'activo')
        {
            if($fila[0]==$pass && $fila[1]==$nick && $fila[2]=='admin')
            {

                $_SESSION['rol']=$fila[2];
                $_SESSION['nick']=$fila[1];
                $_SESSION['imgPerfil']=$fila[4];
                header('Location:../webadmin.php');
            }else if($fila[0]==$pass && $fila[1]==$nick && $fila[2]=='usuario' || $fila[2]=='user')
            {

                $_SESSION['nick']=$fila[1];
                $_SESSION['imgPerfil']=$fila[4];
                $_SESSION['rol']==$fila[2];
                $_SESSION['correo'] = $fila[5];
                header('Location:../webuser.php');
            }else if($fila[0]!=$pass && $fila[1]!=$nick && $fila[2]!='usuario' || $fila[2]!='user')
            {

                $_SESSION['rol']!=$fila[2];
                header('Location:../index.php');

            }

        }
    }

?>
