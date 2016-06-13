<?php
    //require_once("class/conexion.php");
    require_once("class/aplicaciones.php");
    require_once("header.php");

?>
<!-- AQUI EMPIEZA EL CARROUSEL -->
<div id="carousel-1" class="carousel slide show" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1" ></li>
            <li data-target="#carousel-1" data-slide-to="2" ></li>
            <li data-target="#carousel-1" data-slide-to="3" ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/snake.jpg" class="img-responsive" alt="">
                <div class="carousel-caption">
                    <h3> Crazy Snake </h3>
                </div>
            </div>
            <div class="item ">
                <img src="img/vv.jpg" class="img-responsive" alt="">
                <div class="carousel-caption">
                    <h3> VVVV está revolucionando el mercado </h3>
                </div>
            </div>
            <div class="item ">
                <img src="img/trollpong1.jpg" class="img-responsive" alt="">
                <div class="carousel-caption">
                    <h3> Troll Pong la joya de los primeros juegos </h3>
                </div>
            </div>
            <div class="item ">
                <img src="img/flapy.jpg" class="img-responsive" alt="">
                <div class="carousel-caption">
                    <h3> Flappy planes!! version libre de flappy birds </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- AQUI TERMINA EL CARROUSEL -->

<!-- Articulos -->

<div class="container" style="">
    <h1 style="text-align:center"><strong>Aplicaciones</strong></h1>
    <br><br><br>
    <div class="row">
        <?php

            Conexion::conectar();
            $nombre = null;
            $descripcion = null;
            $ruta = null;
            $instAplicacion = new Aplicaciones($nombre,$descripcion,$ruta);
            $instAplicacion->mostrarAplicacion($nombre,$descripcion,$ruta);
            Conexion::desconectar();



         ?>
    </div>

</div>

<!-- botones sociales -->
<div class="container" style="color:brown">
    <div class="row">
        <hr>
        <div class="text-center">
        <h2 style="text-align:center"><strong>Buscanos en las red</strong></h2>
        <br><br>
            <!-- just add href= for your links, like this: -->
            <a href="http://facebook.com" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
            <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
            <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
            <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
         </div>
         <br>
    </div>
</div>

<?php include("footer.php") ?>
<!--
<div class="row">
        <h1 style="text-align:center"><strong>APLICACIONES</strong></h1>
        <br><br>
        <div class="col-md-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc">
                    <p style="text-align:center; margin-top:20px;">

                        <img src="img/evoland.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Evoland</h3>
                            <p>Divertido juego similar al Castle Crasher</p>
                            <a class=" btn btn-default" href="http://mispicaderos.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>
              </div>

        <div class="col-md-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                    <p style="text-align:center; margin-top:20px;">
                        <img src="img/Indiana_heroes.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Indiana Poms</h3>
                            <p>Plataformas entretenido y divertido con colores chillones... no podras jugar solo una vez</p>
                            <a class=" btn btn-default" href="http://mispicaderos.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

    </div>
    <div class="col-sm-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                    <p style="text-align:center; margin-top:20px;">
                        <img src="img/mariowi.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Markio-ui</h3>
                            <p>¿Hace falta decir algo mas? Descargalo YA!</p>
                            <a class=" btn btn-default" href="http://placesforlove.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>
               </div>
           </div>
       </div>
   </div>

</div>
<br><br><br>
<div class="container">
<div class="row">
    <div class="col-lg-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                    <p style="text-align:center; margin-top:20px;">
                        <img src="img/vv.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">vvvvv</h3>
                            <p>Juego de plataformas que burla las leyes de la gravedad... divertidisimo</p>
                            <a class=" btn btn-default" href="http://trovacamporella.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

    </div>
    <div class="col-lg-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                    <p style="text-align:center; margin-top:20px;">
                        <img src="img/pong.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">PONG 3D</h3>
                            <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                            <a class=" btn btn-default" href="http://mispicaderos.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>
    </div>
    <div class="col-lg-4">
                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                    <p style="text-align:center; margin-top:20px;">
                        <img src="img/snake.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">SNAKE 3D</h3>
                            <p>Divertido juego que innova el estilo snake de los 80's con una vision 3D</p>
                            <a class=" btn btn-default" href="http://mispicaderos.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>
    </div>
</div>
-->
