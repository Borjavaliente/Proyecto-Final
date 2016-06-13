<!DOCTYPE html>
<?php
    include("class/conexion.php");
    //include("class/pedidos.php");
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
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body background="img/fondoadmin.jpg" width="100%" height="100%">
        <div class="container">
            <div class="row">
                            <div class="col-lg-12 titulin">
                              <div class="row-fluid">
                                <div class="span12">
                                    <div class="span6">
                                        <h1 class="muted" style="text-align:center" scrollamount="20">Panel Administrador</h1><br><br>
                                        <h3 class="muted" style="text-align:center">"Si lo construimos, ellos vendrán"</h3><br>
                                        <br><br>
                                    </div>
                                </div>
                              </div>
                        </div>

                    </div>
                </div>
        <div class="col-md-3">
            <a href="cerrarsesion.php" class="btn btn-danger" style="width:290px">Cerrar Sesion</a>
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li><a href="" data-target-id="blog">Gestion del Blog</a></li>
                <li><a href="" data-target-id="ofertas">Gestion de ofertas</a></li>
                <li><a href="" data-target-id="producto">Gestion de producto</a></li>
                <li><a href="" data-target-id="usuario">Gestion de usuarios</a></li>
                <li><a href="" data-target-id="pedidos">Ver Pedidos</a></li>
                <li><a href="" data-target-id="apps">Ver Aplicaciones</a></li>
                <li><a href="" data-target-id="usuarios">Ver Usuarios</a></li>
                <li><a href="" data-target-id="correos">Ver Correos</a></li>
                <li><a href="" data-target-id="vips">Ver VIPS</a></li>
            </ul>
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
                                        <div class=" form-group">
                                            <input class="btn btn-primary pull-right btn-lg btn-block" type="submit" value="Insertar noticia">
                                        </div>
                                        <br><br>
                                </form>
                                <form class="" action="php/eliminarNoticia.php" method="post">
                                  <table class="table table-bordered">
                                    <tr>
                                        <td colspan="4" style="text-align:center"><strong>Eliminar Noticia</strong></td>
                                    </tr>
                                    <tr>
                                      <td colspan="">Nº de noticia</td><td colspan="3"><input type="number" name="idNoticia" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align:center">
                                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Eliminar"/>  
                                        </td>
                                    </tr>
                                  </table>
                                </form>
                                <br><br>
                                </div>
                                <?php

                                    include("class/noticias.php");
                                    $idNoticia=0;
                                    $titulo=null;
                                    $portada=null;
                                    $contenido=null;
                                    $fechapublicacion=date("Y-m-d");
                                    Conexion::conectar();
                                    $instNoticia = new Noticia($idNoticia,$titulo,$portada,$contenido,$fechapublicacion);
                                    $instNoticia->mostrarNoticiaAdmin($idNoticia,$titulo,$portada,$contenido,$fechapublicacion);
                                    Conexion::desconectar();
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
                        <td>precio Oferta</td><td><input type="number"  value="" class="form-control input-medium" name="precioOferta" ></td>
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
                  <tr>
                    <td style="text-align:center">Identificador de Oferta</td>
                  </tr>
                  <tr>
                    <td colspan="4"><input type="number" class="form-control" name="idoferta" value=""/></td>
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
                        <td>Nombre</td><td><input type="text" class="form-control input-medium" name="nombre" /></td>
                        <td>Apellido</td><td><input class="form-control input-medium" type="text" name="apellidos"/></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" name="nick" /></td>
                        <td>Rol</td><td><input class="form-control input-medium" type="text"  name="rol"/></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td><td><input class="form-control input-medium" type="date" value="P06" name="fecha"/></td>
                        <td>Correo</td><td><input class="form-control input-medium" type="text"  name="correo"/></td>
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
                        <td>Usuario</td><td><input class="form-control input-medium" type="number" value="Bachelors" name="idusuario"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Desbloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="php/hacerSuperUsuario.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Hacer Admin</strong></td>
                    </tr>
                    <tr>
                        <td>Usuario</td><td><input class="form-control input-medium" type="number" value="Bachelors" name="idusuario"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Hacer Admin"/>  
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-9 admin-content" id="apps">
            <div class="container">
                <?php
                    include("class/aplicaciones.php");
                    //Aplicaciones
                    $idApp = null;
                    $idUsuario = null;
                    $nombre = null;
                    $version=null;
                    $tipo=null;
                    $categoria=null;
                    $fechaLanz=null;
                    $disponible=null;
                    $precio=null;
                    $descripcion=null;
                    $autor=null;
                    $portada=null;
                    $imagen=null;
                    Conexion::conectar();
                    $instAplicaciones = new Aplicaciones($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen);
                    $instAplicaciones->mostrarAplicacionesAdmin($idApp,$idUsuario,$nombre,$version,$tipo,$categoria,$fechaLanz,$disponible,$precio,$descripcion,$autor,$portada,$imagen);
                    Conexion::desconectar();
                 ?>
            </div>
        </div>
        <div class="col-md-9 admin-content" id="pedidos">
            <div class="container">
                <?php
                    include("class/pedidos.php");
                    //Pedidos
                    $idPedido = null;
                    $idApp = null;
                    $fechaCompra = null;
                    $importe = null;
                    Conexion::conectar();
                    $instPortada = new Pedidos($idPedido,$idApp,$fechaCompra,$importe);
                    $instPortada->mostrarPedidos($idPedido,$idApp,$fechaCompra,$importe);
                    Conexion::desconectar();
                 ?>
            </div>
        </div>
        <div class="col-md-9 admin-content" id="usuarios">
            <div class="container">
                <?php

                    $idUsuario=null;
                    $nick=null;
                    $nombre=null;
                    $apellidos=null;
                    $fechaNac=null;
                    $rol=null;
                    $imgPerfil=null;
                    $correo=null;
                    $pass=null;
                    $estado=null;
                    Conexion::conectar();
                    $instPortada = new Usuarios($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
                    $instPortada->mostrarUsuariosAdmin($idUsuario,$nick,$nombre,$apellidos,$fechaNac,$rol,$imgPerfil,$correo,$pass,$estado);
                    Conexion::desconectar();
                 ?>
            </div>
        </div>
        <div class="col-md-9 admin-content" id="correos">
            <div class="container">
                <?php
                    include("class/contactos.php");
                    $idContacto=null;
                    $nombre=null;
                    $email=null;
                    $asunto=null;
                    $mensaje=null;
                    Conexion::conectar();
                    $instContactos = new Contactos($idContacto,$nombre,$email,$asunto,$mensaje);
                    $instContactos->mostrarCorreos($idContacto,$nombre,$email,$asunto,$mensaje);
                    Conexion::desconectar();
                 ?>
            </div>
        </div>
        <div class="col-md-9 admin-content" id="vips">
            <?php
                Conexion::conectar();
                echo "<h1><center>Usuario que mas Comenta</h1><br><br>";
                $consulta = "SELECT nick AS 'Usuario que mas comenta',count(*) AS 'No_d_repeticiones' FROM comentarios c, usuarios u WHERE c.idUsuario=u.idUsuario GROUP BY c.idUsuario HAVING count(*)>0 LIMIT 1";
                $resultado = mysql_query($consulta);
                while($fila = mysql_fetch_row($resultado))
                {
                    $u = $fila[0];
                    $c = $fila[1];

                    echo '<center>
                    <table colspan="8" border="1px">
                        <tr>
                            <td colspan="4"><strong>Usuario</strong></td>
                            <td colspan="4"><strong>Nº Comentarios</strong></td>
                        </tr>
                        <tr>
                            <td colspan="4">'.$u.'</td>
                            <td colspan="4">'.$c.'</td>
                        </tr>
                    </table>
                    </center>
                    <br><br>
                    ';
                }

                Conexion::desconectar();
             ?>
             <!-- USUARIO QUE MAS SUBE APLICACIONES -->
             <?php
             Conexion::conectar();
             echo "<h1><center>Usuario que mas Sube Aplicaciones</h1><br><br>";
             $consulta = "SELECT nick AS 'Usuario que mas sube Apps',count(*) AS 'No de Apps' FROM aplicaciones a, usuarios u WHERE a.idUsuario=u.idUsuario GROUP BY a.idUsuario HAVING count(*)>0 LIMIT 1";
             $resultado = mysql_query($consulta);
             while($fila = mysql_fetch_row($resultado))
             {
                 $u = $fila[0];
                 $a = $fila[1];

                 echo '<center>
                 <table colspan="8" border="1px">
                     <tr>
                         <td colspan="4"><strong>Usuario</strong></td>
                         <td colspan="4"><strong>Nº Aplicaciones</strong></td>
                     </tr>
                     <tr>
                         <td colspan="4">'.$u.'</td>
                         <td colspan="4">'.$a.'</td>
                     </tr>
                 </table>
                 </center>
                 <br><br>
                 ';
             }

             Conexion::desconectar();
          ?>
          <?php
          Conexion::conectar();
          echo "<h1><center>Usuario que mas Descargas realiza</h1><br><br>";
          $consulta = "SELECT nick AS 'Usuario que mas Descarga',count(*) AS 'No de Descargas' FROM pedidos p, usuarios u WHERE p.idUsuario=u.idUsuario GROUP BY p.idUsuario HAVING count(*)>0 LIMIT 1";
          $resultado = mysql_query($consulta);
          while($fila = mysql_fetch_row($resultado))
          {
              $u = $fila[0];
              $p = $fila[1];

              echo '
              <center>
              <table colspan="8" border="1px">
                  <tr>
                      <td colspan="4"><strong>Usuario</strong></td>
                      <td colspan="4"><strong>Nº Descargas</strong></td>
                  </tr>
                  <tr>
                      <td colspan="4">'.$u.'</td>
                      <td colspan="4">'.$p.'</td>
                  </tr>
              </table>
              </center>
              ';
          }

          Conexion::desconectar();
       ?>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/webadmin1.js"></script>
<script type="text/javascript" src="js/webadmin2.js"></script>
</body>
</html>
