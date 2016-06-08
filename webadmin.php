<!DOCTYPE html>
<?php
    /* COMPROBAMOS QUE EL USUARIO ES ADMIN Y QUE HA INICADO SESION  **/
    session_start();
    if($_SESSION['rol']!='admin'){
        header('location:index.php');
    }
    if (isset($_POST['nick'])){
        $_SESSION['nick']=$_POST['nick'];
    }
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Administrador</title>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body background="img/fondoadmin.jpg" width="100%" height="100%">
        <div class="container">
            <div class="row">
                            <div class="col-lg-12 titulin">
                              <div class="row-fluid">
                                <div class="span12">
                                    <div class="span6">
                                        <h1 class="muted" style="text-align:center" scrollamount="20">Panel Administrador</h1>
                                        <br><br>
                                    </div>
                                </div>
                              </div>
                        </div>

                    </div>
                </div>
        <div class="col-md-3">
            <a href="cerrarsesion.php" class="btn btn-danger btn-block" style="width:320px">Cerrar Sesion</a>
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li><a href="" data-target-id="blog">Gestion del Blog</a></li>
                <li><a href="" data-target-id="ofertas">Gestion de ofertas</a></li>
                <li><a href="" data-target-id="producto">Gestion de producto</a></li>
                <li><a href="" data-target-id="usuario">Gestion de usuarios</a></li>
                <li>
                    <div id="custom-search-input">
                         <div class="input-group col-xs-12">
                             <input type="text" class="search-query form-control" placeholder="Search"/>
                                 <span class="input-group-btn">
                                     <button class="btn btn-danger" type="submit">
                                         <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                 </span>
                             </div>
                     </div>
                </li>
            </ul>

        </div>
        <div class="col-md-9 admin-content" id="consulta">
            <div class="container">
                <div class="row">

                                </div>
                          </div>

                    </div>
        <div class="col-md-9 admin-content" id="blog">
            <h1 style="text-align:center">Noticias</h1><br><br>
            <div class="container">
                <div>
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-9 contact-form">
                                <form id="contact" method="post" action="php/insertarNoticia.php" class="form" role="form">
                                    <div class="row">
                                        <div class="col-xs-9 col-md-9 form-group">
                                            <input class="form-control" id="name" name="titulo" placeholder="Inserte el titulo del post" type="text" required autofocus /><br>
                                        </div>
                                        <div class="col-xs-9 col-md-9 form-group">
                                            <label for="">Portada</label>
                                            <br>
                                            <input class="form-control" id="name" name="portada" placeholder="Inserte una portada" type="file"  autofocus /><br>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="message" name="mensaje" placeholder="Escriba aqui el mensaje" rows="8"></textarea>
                                    <br/>
                                    <div class="row">
                                        <div class="col-xs-9 col-md-9 form-group">
                                            <input class="btn btn-primary pull-right btn-lg btn-block" type="submit" value="Insertar noticia">
                                        </div>
                                </form>

                                </div>
                                <?php
                                    echo "Aqui va el php que mira los ultimos post";
                                 ?>
                            </section>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        <div class="col-md-9 admin-content" id="ofertas">
            <br><br><br>
            <form class="" action="php/agregarOfertas.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Ofertas</strong></td>
                    </tr>
                    <tr>
                        <td>Fecha de Lanzamiento</td><td><input class="form-control input-medium" type="date" name="fechaInicio" required=""/></td>
                        <td>Fecha de Finalizacion</td><td><input class="form-control input-medium" type="date" name="fechaFin" required=""/></td>
                    </tr>
                    <tr>
                        <td>Aplicacion</td><td><input type="number"  value="Aplicacion" class="form-control input-medium" name="app" ></td>
                        <td>Porcentaje</td><td><input type="number"  value="Descuento" class="form-control input-medium" name="porcentaje" ></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Agregar"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br><br>
            <form class="" action="php/eliminarOfertas.php" method="post">
                <table class="table table-bordered">
                  <tr>
                      <td colspan="4" style="text-align:center"><strong>Eliminar Oferta</strong></td>
                  </tr>
                  <td>
                    <br>
                  </td>
                  <tr>
                    <td style="text-align:center">Identificador de Oferta</td>
                  </tr>
                  <tr>
                    <td colspan="4"><input type="number" class="form-control" name="idoferta" value="Abhishek Gorlagunta"/></td>
                  </tr>
                  <tr>
                    <td colspan="4" style="text-align:center">
                    <input type="submit" class="btn btn-danger btn-lg btn-block" value="Eliminar"/>  
                    </td>
                  </tr>
                </table>
            </form>
        </div>
        <div class="col-md-9 admin-content" id="producto">
          <!-- Posible snipp  http://bootsnipp.com/snippets/featured/table-with-users -->
          <form class="" action="php/agregarAplicacion.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Aplicaciones</strong></td>
              </tr>
                <tr>
                    <td>Nombre</td><td><input type="text" name="nombre" class="form-control input-medium" value=""/></td>
                    <td>Version</td><td><input class="form-control input-medium" name="version" type="text" value=""/></td>
                </tr>
                <tr>
                    <td>Tipo</td><td><input type="text" name="tipo" class="form-control input-medium" value="Aplicacion"/></td>
                    <td>Categoria</td><td><input class="form-control input-medium" name="categoria" type="text" value=""/></td>
                </tr>
                <tr>
                    <td>Disponible</td><td><input type="text" class="form-control input-medium" name="disponible" value=""/></td>
                    <td>Precio</td><td><input class="form-control input-medium" type="number" name="precio" value=""/></td>
                </tr>
                <tr>
                    <td>Descripcion</td><td><input type="text" class="form-control input-medium" name="descripcion" value=""/></td>
                    <td>Autor</td><td><input type="text" class="form-control input-medium" name="autor" value=""/></td>
                </tr>
                <tr>
                    <td>Portada</td><td><input type="file" class="form-control input-medium" name="portada" value=""/></td>
                    <td>Imagen</td><td><input type="file" class="form-control input-medium" name="imagen" value=""/></td>
                </tr>
                <tr>
                    <td>Fichero</td><td colspan="3"><input type="file" class="form-control input-medium" name="fichero" value=""/></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Subir App"/>  
                    </td>
                </tr>
            </table>
          </form>
          <br><br><br>
          <form class="" action="php/activarAplicacion.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Activar Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="number" name="idapp" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align:center">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Activar"/>  
                  </td>
              </tr>
            </table>
          </form>
          <br><br><br>
          <form class="" action="php/bloquearAplicacion.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Bloquear Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="number" name="idapp" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align:center">
                  <input type="submit" class="btn btn-warning btn-lg btn-block" value="Bloquear"/>  
                  </td>
              </tr>
            </table>
          </form>
          <br><br><br>
          <form class="" action="php/eliminarAplicacion.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Eliminar Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="number" name="idapp" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align:center">
                  <input type="submit" class="btn btn-danger btn-lg btn-block" value="Eliminar"/>  
                  </td>
              </tr>
            </table>
          </form>
        </div>
        <div class="col-md-9 admin-content" id="usuario">
            <form class="" action="php/agregarUsuario.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Usuarios</strong></td>
                    </tr>
                    <tr>
                        <td>Nombre</td><td><input type="text" class="form-control input-medium" name="nombre" value="Nombre"/></td>
                        <td>Apellido</td><td><input class="form-control input-medium" type="text" name="apellidos" value="Apellidos"/></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" name="nick" /></td>
                        <td>Rol</td><td><input class="form-control input-medium" type="text"  name="rol"/></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td><td><input class="form-control input-medium" type="date" value="P06" name="fecha"/></td>
                        <td>Correo</td><td><input class="form-control input-medium" type="text" value="1" name="correo"/></td>
                    </tr>
                    <tr>
                        <td>Password</td><td><input class="form-control input-medium" type="password" value="P06" name="pass"/></td>
                        <td>Foto de perfil</td><td><input class="form-control input-medium" type="file" value="P06" name="imagen"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Dar de Alta"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/bajaUsuario.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Baja de usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Usuario</td><td><input class="form-control input-medium" type="number" value="" name="idusuario"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-warning btn-lg btn-block" value="Dar de Baja"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/bloquearUsuario.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Bloquear un usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Usuario</td><td><input class="form-control input-medium" type="number" value="Bachelors" name="idusuario" /></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Bloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/desbloquearUsuario.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Desbloquear un usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Usuario</td><td><input class="form-control input-medium" type="text" value="Bachelors" name="idusuario"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Desbloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/webadmin1.js"></script>
<script type="text/javascript" src="js/webadmin2.js"></script>
</body>
</html>
