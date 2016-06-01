<!DOCTYPE html>
<?php
    //include "sesion_admin.php";
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
    <body>
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
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li><a class="active" href="#" data-target-id="consulta">Busqueda de Aplicaciones</a></li>
                <li><a href="" data-target-id="blog">Gestion del Blog</a></li>
                <li><a href="" data-target-id="ofertas">Gestion de ofertas</a></li>
                <li><a href="" data-target-id="producto">Gestion de producto</a></li>
                <li><a href="" data-target-id="usuario">Gestion de usuarios</a></li>
            </ul>
        </div>
        <div class="col-md-9 admin-content" id="consulta">
            <div class="container">
                <div class="row">
                    <br><br>
                    <center><h2>Panel de Busqueda</h2></center><br><br><br>
                       <div id="custom-search-input">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="search-query form-control" placeholder="Search"/>
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger" type="button">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          <!-- Buscador de Ajax -->
                    </div>
        <div class="col-md-9 admin-content" id="blog">
            <h1 style="text-align:center">Agregar Noticia</h1><br><br>
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
            <form class="" action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Gestion de Oferta</strong></td>
                    </tr>
                    <tr>
                        <td>Fecha de Lanzamiento</td><td><input class="form-control input-medium" type="date" name="fechalanz" required=""/></td>
                        <td>Fecha de Finalizacion</td><td><input class="form-control input-medium" type="date" name="fechafinal" required=""/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-success btn-lg btn-block" value="Agregar"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br><br>
            <form class="" action="" method="post">
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
                    <td colspan="4"><input type="text" class="form-control" name="idofelim" value="Abhishek Gorlagunta"/></td>
                  </tr>
                  <tr>
                    <td colspan="4" style="text-align:center">
                    <input type="button" class="btn btn-danger btn-lg btn-block" value="Eliminar"/>  
                    </td>
                  </tr>
                </table>
            </form>
        </div>
        <div class="col-md-9 admin-content" id="producto">
          <!-- Posible snipp  http://bootsnipp.com/snippets/featured/table-with-users -->
          <form class="" action="php/aplicacionAgregar.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Agregar Aplicacion</strong></td>
              </tr>
                <tr>
                    <td>Nombre</td><td><input type="text" name="nombreapp" class="form-control input-medium" value="Abhishek Gorlagunta"/></td>
                    <td>Precio</td><td><input class="form-control input-medium" name="precioapp" type="number" value="Bachelors"/></td>
                </tr>
                <tr>
                    <td>Categoria</td><td><input type="text" class="form-control input-medium" name="categoriaapp" value="Abhishek Gorlagunta"/></td>
                    <td>version</td><td><input class="form-control input-medium" type="number" name="versionapp" value="Bachelors"/></td>
                </tr>
                <tr>
                  <td colspan="4" style="text-align:center">
                    Descripcion
                  </td>
                </tr>
                <tr>
                  <td colspan="4">
                    <input type="text" class="form-control" value="Abhishek Gorlagunta"/>
                  </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center">
                    <input type="button" class="btn btn-success btn-lg btn-block" value="Subir App"/>  
                    </td>
                </tr>
            </table>
          </form>
          <br><br><br>
          <form class="" action="php/aplicacionBloquear.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Bloquear Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="text" name="idappbloq" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align:center">
                  <input type="button" class="btn btn-warning btn-lg btn-block" value="Bloquear"/>  
                  </td>
              </tr>
            </table>
          </form>
          <br><br><br>
          <form class="" action="php/aplicacionEliminar.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Eliminar Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="text" name="idappelim" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align:center">
                  <input type="button" class="btn btn-danger btn-lg btn-block" value="Eliminar"/>  
                  </td>
              </tr>
            </table>
          </form>
        </div>
        <div class="col-md-9 admin-content" id="usuario">
            <form class="" action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Alta de usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nombre</td><td><input type="text" class="form-control input-medium" name="nombreusu" value="Abhishek Gorlagunta"/></td>
                        <td>Apellido</td><td><input class="form-control input-medium" type="text" name="apellusu" value="Bachelors"/></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="3" name="nickusu" /></td>
                        <td>Rol</td><td><input class="form-control input-medium" type="text" value="IT Engineer 2" name="rolusu"/></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td><td><input class="form-control input-medium" type="date" value="P06" name="fechillausu"/></td>
                        <td>Correo</td><td><input class="form-control input-medium" type="text" value="1" name="correousu"/></td>
                    </tr>
                    <tr>
                        <td>Password</td><td><input class="form-control input-medium" type="password" value="P06" name="passusu"/></td>
                        <td>Foto de perfil</td><td><input class="form-control input-medium" type="file" value="P06" name="imgusu"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-success btn-lg btn-block" value="Dar de Alta"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/usuarioBaja.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Baja de usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="Bachelors" name="idbajausu"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-warning btn-lg btn-block" value="Dar de Baja"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/usuarioBloquear.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Bloquear un usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="Bachelors" name="idbloqueousu" /></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-danger btn-lg btn-block" value="Bloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/usuarioDesbloquear.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Desbloquear un usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="Bachelors" name="iddesbloqueousu"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-primary btn-lg btn-block" value="Desbloquear"/>  
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
