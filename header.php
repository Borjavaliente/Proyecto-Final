<?php //include("php/agregarNombre.php") ?>
<html background="img/fondo2.jpg">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/webuser.css" media="screen" title="no title" charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Arimo:400" rel="stylesheet">
    </head>
    <body background="img/fondo2.jpg">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a target="_blank" href="#" class="navbar-brand"><img class="logotipo" src="img/logo.jpg" alt=""/></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="webuser.php">Inicio</a></li>
                        <li><a href="noticias.php">Noticias</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Explora
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="donar.php">Ayudanos!!</a></li>
                                <li><a href="acercade.php">Acerca de...</a></li>
                            </ul>
                         </li>
                         <li><a href="contacto.php">Contacto</a></li>
                     </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--<span class="glyphicon glyphicon-user"></span> -->
                                <strong>Usuario</strong>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <!--class="glyphicon glyphicon-user icon-size"-->
                                                    <span> <?php include("php/muestraFoto.php")  ?></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left"><strong><?php include("php/muestraNombre.php");?></strong></p>
                                                <p class="text-left small"><?php include("php/muestraCorreo.php");?></p>
                                                <p class="text-left">
                                                    <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <a href="cerrarsesion.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <form action="" class="search-form">
                                 <div class="form-group has-feedback">
                                   <label for="search" class="sr-only">Explora</label>
                                   <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                       <span class="glyphicon glyphicon-search form-control-feedback"></span>
                               </div>
                         </form>
                    </ul>
                </div>
            </div>
        </div>
