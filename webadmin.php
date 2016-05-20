<!DOCTYPE html>
<?php
    include "sesion_admin.php";
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
                <li class="active"><a href="#" data-target-id="competency">Gestion del Blog</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="ofertas">Gestion de ofertas</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="producto">Gestion de producto</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="usuario">Gestion de usuarios</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="consulta">Consultas</a></li>
            </ul>
        </div>
        <div class="col-md-9 admin-content" id="competency">
        <table style="width:100%">
            <tr>
                <td>
                <input name="search" placeholder="Search and select Job Code" class="form-control input-medium col-lg-2" />
                <br><br><br>
                <div style="height:190px;overflow:auto;width:100%">
            </div>
                </td>
        <td>  </td>
        <td style="vertical-align:top">
            <br><p><strong>Titulo para el post</strong></p>
        </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id="messageLabel" for="message">Message </label>
                        <textarea class="form-control input-sm " type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                    </div>
                    <br style="clear:both">
                    <div class="form-group">
                    <button class="form-control input-sm btn btn-success disabled" id="btnSubmit" name="btnSubmit" type="button" style="height:35px"> Send</button>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Check here to delete Competencies</strong></p>
                    <table class="table table-bordered">
                        <tr><td>Job Code</td><td>Area</td><td>Delete</td></tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td><button type="button" title="Competency 1"class="btn btn-primary" data-container="body"
                        data-toggle="popover" data-placement="right" data-content="Competency 1 Details">Area1</button></td>
                        <td><a href=""><i class="glyphicon glyphicon-trash"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td><button type="button" title="Competency 2"class="btn btn-primary" data-container="body"
                        data-toggle="popover" data-placement="right" data-content="Competency 2 Details">Area2</button></td>
                        <td><a href=""><i class="glyphicon glyphicon-trash"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td><button type="button" title="Competency 3"class="btn btn-primary" data-container="body"
                        data-toggle="popover" data-placement="right" data-content="Competency 3 Details">Area3</button></td>
                        <td><a href=""><i class="glyphicon glyphicon-trash"></i></i></a></td>
                        </tr>
                    </table>
                </td>
                <td>  </td>
                <td style="vertical-align:top">
                <p><strong>Choose File and Upload</strong></p>
                    <table class="table table-bordered">
                        <tr>
                            <td>


                                <input type="file" class="form-control input-medium"/><br><br><br>
                                <p><strong>Click <a href="#">here</a> to download Excel Template</strong></p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
        </div>
        <div class="col-md-9 admin-content" id="ofertas">

            <div class="alert alert-danger" role="alert">Please note that loading experience guidelines will override the existing data.
            Existing data will be wiped off and the new data will be loaded</div>
            <!--<p><strong>Click the button below to load the experience guidelines into the system</strong>
            </p>-->
            <p><input type="button" class="btn btn-primary" value="Load Experience Guidelines" /></p>
            <p>Click <a href="#">here</a> to download the existing data</p>
        </div>
        <div class="col-md-9 admin-content" id="producto">
            <table style="width:100%">
                <tr>
                    <td>
                        <input name="search" placeholder="Search and select Job Code" class="form-control input-medium col-lg-2" />
                <br><br><br>
                <div style="height:190px;overflow:auto;width:100%">
                <table class="table table-bordered">
                    <tr><td>Job Code 1 - Job Title 1</td></tr>
                    <tr><td>Job Code 2 - Job Title 2</td></tr>
                    <tr><td>Job Code 3 - Job Title 3</td></tr>
                    <tr><td>Job Code 4 - Job Title 4</td></tr>
                    <tr><td>Job Code 5 - Job Title 5</td></tr>
                    <tr><td>Job Code 6 - Job Title 6</td></tr>
                    <tr><td>Job Code 7 - Job Title 7</td></tr>
                    <tr><td>Job Code 8 - Job Title 8</td></tr>
                    <tr><td>Job Code 9 - Job Title 9</td></tr>
                    <tr><td>Job Code 10 - Job Title 10</td></tr>
                </table>
            </div>
        <br><br><br>
                    </td>
                    <td>  </td>
        <td style="vertical-align:top">
            <br><p><strong>Add/Update reference types for each job code here</strong></p><br>
            <form id="competencyForm">
                <table class="table table-bordered" style="width:100%">
                    <tr><td>Job Code</td><td><input class="form-control input-medium" name="jobCode" id="competencyJobCode" /></td></tr>
                    <tr><td>Reference Type</td><td><select class="form-control input-medium" name="area" id="area" >
                    <option>Internal</option>
                    <option>External</option>
                    </select></td></tr>
                    <tr><td>Count</td><td><input class="form-control input-medium" name="competency" id="competency"/></td></tr>
                </table>
            </form>
        </td>
                </tr>
                <tr>
                <td>
                    <p><strong>Check here to save references</strong></p>
                    <table class="table table-bordered">
                        <tr><td>Job Code</td><td>Reference Type</td><td>Count</td><td>Save</td></tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td>Internal</td>
                        <td><input type = "text" class="form-control input-medium" value="2"/></td>
                        <td><a href=""><i class="glyphicon glyphicon-floppy-disk"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td>External</td>
                        <td><input type = "text" class="form-control input-medium" value="1"/></td>
                        <td><a href=""><i class="glyphicon glyphicon-floppy-disk"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 2 - Job Title 2</td>
                        <td>Internal</td>
                        <td><input type = "text" class="form-control input-medium" value="0"/></td>
                        <td><a href=""><i class="glyphicon glyphicon-floppy-disk"></i></i></a></td>
                        </tr>
                    </table>
                </td>
                <td>  </td>
                <td style="vertical-align:top">
                <p><strong>Choose File and Upload</strong></p>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <input type="file" class="form-control input-medium"/><br><br><br>
                                <p><strong>Click <a href="#">here</a> to download Excel Template</strong></p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            </table>
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
                        <input type="button" class="btn btn-success" value="Dar de Alta"/>  
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
                        <input type="button" class="btn btn-warning" value="Dar de Baja"/>  
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
                        <input type="button" class="btn btn-danger" value="Bloquear"/>  
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
                        <input type="button" class="btn btn-primary" value="Desbloquear"/>  
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-9 admin-content" id="consulta">
            <div class="alert alert-danger" role="alert">Please note that loading experience data will override the existing data.
            New employees, if any, will be added</div>
            <!--<p><strong>Click the button below to load the experience guidelines into the system</strong>

            </p>-->
            <p><input type="file" /><br><input type="button" class="btn btn-primary" value="Upload Experience Data" /></p>
            <p>Click <a href="#">here</a> to download the existing data</p>
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
</body>
</html>
