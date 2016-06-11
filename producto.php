<?php
    include("header.php");
    include("class/aplicaciones.php");
    include("class/comentario.php");
?>
<link rel="stylesheet" href="css/producto.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/comentarios.css" media="screen" title="no title" charset="utf-8">
        <br><br><br><br>
        <!-- Descripcion del producto -->
        <div class="container-fluid">
            <div class="content-wrapper">
        		<div class="item-container">
        			<div class="container">
                        <!-- IMAGEN DESCRIPTIVA DEL PRODUCTO -->
                        <?php
                        //@$idApp = $_GET['idApp'];
                        Conexion::conectar();
                        $idApp = $_GET['idApp'];
                        $instPortada = new Aplicaciones($_GET['idApp']);
                        $instPortada->mostrarPortadaCompra($_GET['idApp']);
                        $_SESSION['idApp'] = $idApp;
                        Conexion::desconectar();
                         ?>


        				<div class="col-md-11">
                            <br><br><br>
                            <center>
        					<div class="btn-group cart">
        						<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-success center-block">Comprar</button>
        					</div>
                            <!-- FORMULARIO EMERGENTE QUE SE ABRE CUANDO PULSAS EL BOTON COMPRAR  -->
                            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                       <center><h3 class="modal-title" id="lineModalLabel">Datos de la compra</h3></center>
                                   </div>
                                   <div class="modal-body">
                                        <!-- content goes here -->
                                    <form method="POST" action="php/agregarPedido.php">
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nuevo password" required="Campo Obligatorio">
                                          </div>
                                          <center><input type="submit" class="btn btn-success" value="Validar">
                                    </form>
                                   </div>
                                   <div class="modal-footer">
                                       <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                           <div class="btn-group" role="group">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button">Cerrar</button>
                                           </div>
                                           <div class="btn-group btn-delete hidden" role="group">
                                               <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Borrar</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                              </div>
                            </div>
                        </center>
        				</div>
        			</div>
        		</div>
        		<div class="container-fluid">
        			<div class="col-md-12 product-info">
        					<ul id="myTab" class="nav nav-tabs nav_tabs">

        						<li class="active"><a href="#service-one" data-toggle="tab">INFORMACION DE PRODUCTO</a></li>
                                <li><a href="#service-tree" data-toggle="tab">COMMENTARIOS</a></li>

        					</ul>
        				<div id="myTabContent" class="tab-content">
        						<div class="tab-pane fade in active" id="service-one">
        							<section class="container product-info">
                                        <p>
                                            <?php
                                            $idApp = null;
                                            Conexion::conectar();
                                            $instdescripcion = new Aplicaciones($_GET['idApp']);
                                            $instdescripcion->mostrarDescripcionCompra($_GET['idApp']);
                                            Conexion::desconectar();
                                             ?>
                                        </p>
        							</section>
        						</div>
                            <div class="tab-pane fade" id="service-tree" class="container product-info">
                                <section class="container">
                                    <!-- CODIGO PARA INSERTAR LOS COMENTARIOS - POR AQUI SE COMENTA  -->
                                    <div class="container">
                                            <div class="row">
                                            </div>
	                                       <div class="row">
                                        		<h3 style="text-align:center">COMENTA NUESTROS PRODUCTOS</h3>
                                        	</div>
                                            <div class="row">
                                                <div class="col-md-12">
                            						<div class="widget-area no-padding blank">
                        								<div class="status-upload">
                        									<form action="php/agregarComentario.php" method="post">
                        										<textarea placeholder="Comenta....." name="comentario"></textarea>
                        										<center><input type="submit"  value="Comentar" class="btn btn-success green"></center>             </form>
                        								</div><!-- Status Upload  -->
                        							</div><!-- Widget Area -->
                        						</div>
                                            </div>
                                        </div>
                                </section>
                            </div>
        				</div>
        				<hr>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- botones sociales -->
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
        <script src="js/producto.js" charset="utf-8"></script>
<?php include("footer.php") ?>
