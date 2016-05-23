<!DOCTYPE html>
<?php
    //include "sesion_admin.php";
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="jumbotron jumbotron-sm">
                            <div class="col-sm-12 col-lg-12 titulin">
                                <center><h3 class="h3">Panel de Administrador</h3></center>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="blog">Gestion del Blog</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="ofertas">Gestion de ofertas</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="producto">Gestion de producto</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="usuario">Gestion de usuarios</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="consulta">Consultas</a></li>
            </ul>
        </div>
        <div class="col-md-9 admin-content" id="blog">
            <h1>Agregar Comentario</h1><br><br>
            <div class="container">
                <div>
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-9 contact-form">
                                <form id="contact" method="post" class="form" role="form">
                                    <div class="row">
                                        <div class="col-xs-9 col-md-9 form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Inserte el titulo del post" type="text" required autofocus /><br>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="message" name="message" placeholder="Escriba aqui el mensaje" rows="8"></textarea>
                                    <br/>
                                    <div class="row">
                                        <div class="col-xs-9 col-md-9 form-group">
                                            <button class="btn btn-primary pull-right btn-lg btn-block" type="submit">Submit</button>
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
                        <td>Fecha de Lanzamiento</td><td><input class="form-control input-medium" type="date" required=""/></td>
                        <td>Fecha de Finalizacion</td><td><input class="form-control input-medium" type="date" required=""/></td>
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
                    <td colspan="4"><input type="text" class="form-control" value="Abhishek Gorlagunta"/></td>
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
          <form class="" action="index.html" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Agregar Aplicacion</strong></td>
              </tr>
                <tr>
                    <td>Nombre</td><td><input type="text" class="form-control input-medium" value="Abhishek Gorlagunta"/></td>
                    <td>Precio</td><td><input class="form-control input-medium" type="number" value="Bachelors"/></td>
                </tr>
                <tr>
                    <td>Categoria</td><td><input type="text" class="form-control input-medium" value="Abhishek Gorlagunta"/></td>
                    <td>version</td><td><input class="form-control input-medium" type="number" value="Bachelors"/></td>
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
          <form class="" action="index.html" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Bloquear Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align:center">
                  <input type="button" class="btn btn-warning btn-lg btn-block" value="Bloquear"/>  
                  </td>
              </tr>
            </table>
          </form>
          <br><br><br>
          <form class="" action="index.html" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Eliminar Aplicacion</strong></td>
              </tr>
              <tr>
                <td colspan="">Identificador</td><td colspan="3"><input type="text" class="form-control"></td>
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
                        <td>Nombre</td><td><input type="text" class="form-control input-medium" value="Abhishek Gorlagunta"/></td>
                        <td>Apellido</td><td><input class="form-control input-medium" type="text" value="Bachelors"/></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="3"/></td>
                        <td>Rol</td><td><input class="form-control input-medium" type="text" value="IT Engineer 2"/></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td><td><input class="form-control input-medium" type="date" value="P06"/></td>
                        <td>Correo</td><td><input class="form-control input-medium" type="text" value="1"/></td>
                    </tr>
                    <tr>
                        <td>Password</td><td><input class="form-control input-medium" type="password" value="P06"/></td>
                        <td>Foto de perfil</td><td><input class="form-control input-medium" type="file" value="P06"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-success btn-lg btn-block" value="Dar de Alta"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Baja de usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="Bachelors"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-warning btn-lg btn-block" value="Dar de Baja"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Bloquear un usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="Bachelors"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-danger btn-lg btn-block" value="Bloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <form class="" action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4" style="text-align:center"><strong>Desbloquear un usuario</strong></td>
                    </tr>
                    <tr>
                        <td>Nick</td><td><input class="form-control input-medium" type="text" value="Bachelors"/></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                        <input type="button" class="btn btn-primary btn-lg btn-block" value="Desbloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-9 admin-content" id="consulta">
            <div class="container">
            	<div class="row">
                    <br><br>
            		<center><h2>...Inserte los datos de busqueda...</h2></center><br><br><br>
                       <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="  search-query form-control" placeholder="Search" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger" type="button">
                                                    <span class=" glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                            	</div>
                          </div>
                          <!-- Buscador de Ajax -->
                    </div>
    </div>
</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');

    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');

        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
    $("[data-toggle='popover']").popover();
    $(document).contents().find( "#snippet-preview" ).css( "height", "800px" );
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#characterLeft').text('140 characters left');
    $('#message').keyup(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
    });
</script>
<!-- Buscador de Ajax -->
<script type="text/javascript">

</script>
</body>
</html>
