<?php include("header.php") ?>

         <br><br><br><br><br>
         <hr>
         <br><br><br>
         <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-danger center-block">Click Aqui para Modificar datos</button></div>
         <br><br><br><br><br>
         <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
           <div class="modal-dialog">
         	<div class="modal-content">
         		<div class="modal-header">
         			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         			<center><h3 class="modal-title" id="lineModalLabel">Modificar usuario</h3></center>
         		</div>
         		<div class="modal-body">
                     <!-- content goes here -->
         			<form method="POST" action="php/actualizaUsuario.php">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nick de usuario</label>
                          <input type="text" name="nick" class="form-control" id="exampleInputEmail1" placeholder="Introduzca nuevo Nick" required="Campo Obligatorio">
                        </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Nombre de usuario</label>
                         <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" placeholder="Introduzca nuevo nombre" required="Campo Obligatorio">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Apellido de usuario</label>
                         <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" placeholder="Introduzca nuevo apellido" required="Campo Obligatorio">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                         <input type="date" name="fechaNac" class="form-control" id="exampleInputEmail1" placeholder="Introduzca nuevo Fecha" required="Campo Obligatorio">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Direccon de correo</label>
                         <input type="email" name="correo" class="form-control" id="exampleInputEmail1" placeholder="Nuevo email" required="Campo Obligatorio">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputPassword1">Nueva Password</label>
                         <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nuevo password" required="Campo Obligatorio">
                       </div>
                       <center><button type="submit" class="btn btn-success">Modificar</button>
                 </form>
         		</div>
         		<div class="modal-footer">
         			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
         				<div class="btn-group" role="group">
         					<button type="button" class="btn btn-warning" data-dismiss="modal"  role="button">Cerrar</button>
         				</div>
         				<div class="btn-group btn-delete hidden" role="group">
         					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Borrar</button>
         				</div>
         			</div>
         		</div>
         	</div>
           </div>
         </div>
         <!-- botones sociales -->
         <div class="container">
             <div class="row">
                 <div class="text-center">
                     <hr>
                     <h4>Social Network</h4>
                     <hr>
                     <!-- just add href= for your links, like this: -->
                     <a href="http://facebook.com" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                     <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                     <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                     <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                     <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                     <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                  </div>
                  <br>
             </div> <!-- /.row -->
            </div>
             <br><br><br>

<?php include("footer.php") ?>
