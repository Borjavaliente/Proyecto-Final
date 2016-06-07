<?php include("header.php")  ?>
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 admin-content" id="producto">
          <!-- Posible snipp  http://bootsnipp.com/snippets/featured/table-with-users -->
          <form class="" action="php/agregarAplicacionUser.php" method="post">
            <table class="table table-bordered">
              <tr>
                  <td colspan="4" style="text-align:center"><strong>Sube tu App!!</strong></td>
              </tr>
                <tr>
                    <td><b>Nombre</b></td><td><input type="text" name="nombre" class="form-control input-medium" value=""/></td>
                    <td><b>Version</b></td><td><input class="form-control input-medium" name="version" type="text" value=""/></td>
                </tr>
                <tr>
                    <td><b>Tipo</b></td><td><input type="text" name="tipo" class="form-control input-medium" value="Aplicacion"/></td>
                    <td><b>Categoria</b></td><td><input class="form-control input-medium" name="categoria" type="text" value=""/></td>
                </tr>
                <tr>
                    <td><b>Descripcion</b></td><td><input type="text" class="form-control input-medium" name="descripcion" value=""/></td>
                    <td><b>Precio</b></td><td><input class="form-control input-medium" type="number" name="precio" value=""/></td>
                </tr>
                <tr>
                    <td><b>Portada</b></td><td><input type="file" class="form-control input-medium" name="portada" value=""/></td>
                    <td><b>Imagen</b></td><td><input type="file" class="form-control input-medium" name="imagen" value=""/></td>
                </tr>
                <tr>
                    <td><b>Fichero</b></td><td colspan="3"><input type="file" class="form-control input-medium" name="fichero" value=""/></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Subir App"/>  
                    </td>
                </tr>
            </table>
          </form>
          <br><br><br>
      </div>
    </div>
</div>
<div class="container">
    <div class="row">
    </div>
</div>
<div class="container">
    <div class="row">
        <hr>
        <div class="text-center">
        <h4>Social Network</h4>
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
