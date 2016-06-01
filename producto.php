<?php include("header.php") ?>
<link rel="stylesheet" href="css/producto.css" media="screen" title="no title" charset="utf-8">
        <br><br><br><br>
        <!-- Descripcion del producto -->
        <div class="container-fluid">
            <div class="content-wrapper">
        		<div class="item-container">
        			<div class="container">
        				<div class="col-md-12">
        					<div class="product col-md-12 service-image-left">
        						<img id="item-display" src="img/Indiana_heroes.jpg" width="1050" height="320" alt=""></img>
        					</div>
        				</div>
        				<div class="col-md-11">
                            <br><br><br>
                            <center>
        					<div class="btn-group cart">
        						<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-success center-block">Comprar</button>
        					</div>
                            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                       <center><h3 class="modal-title" id="lineModalLabel">Datos de la compra</h3></center>
                                   </div>
                                   <div class="modal-body">
                                        <!-- content goes here -->
                                    <form method="POST" action="webuser_compra.php">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Nick de usuario</label>
                                            <input type="text" name="nick" class="form-control" id="exampleInputEmail1" placeholder="Introduzca nuevo Nick" required="Campo Obligatorio">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Direccon de correo</label>
                                            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" placeholder="Nuevo email" required="Campo Obligatorio">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nuevo password" required="Campo Obligatorio">
                                          </div>
                                          <center><button type="submit" class="btn btn-success">Validar</button>
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

        						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPCION</a></li>
        						<li><a href="#service-two" data-toggle="tab">INFORMACION DE PRODUCTO</a></li>
                                <li><a href="#service-tree" data-toggle="tab">COMMENTARIOS</a></li>

        					</ul>
        				<div id="myTabContent" class="tab-content">
        						<div class="tab-pane fade in active" id="service-one">
        							<section class="container product-info">
                                        <p>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>
                                            lskflkfnslkf <br>

                                        </p>
        							</section>
        						</div>
        					<div class="tab-pane fade" id="service-two">
        						<section class="container" class="container product-info">
                                    <p>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>

                                    </p>
        						</section>
        					</div>
                            <div class="tab-pane fade" id="service-tree" class="container product-info">
                                <section class="container">
                                    <p>
                                        bbbbbbbbbbbb <br>
                                        bbbbbbbbbbbb <br>
                                        bbbbbbbbbbbb <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>
                                        lskflkfnslkf <br>

                                    </p>
                                    <div class="container">
	                                       <div class="row">
                                        		<h3 style="text-align:center">COMENTA NUESTROS PRODUCTOS</h3>
                                        	</div>
                                            <div class="row">
                                                <div class="col-md-6">
                            						<div class="widget-area no-padding blank">
                        								<div class="status-upload">
                        									<form>
                        										<textarea placeholder="Comenta....." ></textarea>
                        										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i>Comentar</button>
                        									</form>
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
