<?php

    define("HOST","localhost");
    define("USUARIO","root");
    define("PASSWORD","alumno");
    define("BD","tienda");

    class Conexion
    {
        public static function conectar()
        {
            mysql_connect(HOST,USUARIO,PASSWORD);
            mysql_select_db(BD);
            mysql_set_charset("utf8");
            //echo "Bienvenido al servidor";
        }

        public static function desconectar()
        {
            mysql_close();
        }
    }

 ?>
