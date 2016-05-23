<?php

 ?>

 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title></title>
         <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
         <link rel="stylesheet" href="webuser.css" media="screen" title="no title" charset="utf-8">
         <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css" rel="stylesheet"/>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
         <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
         <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
         <link href="http://fonts.googleapis.com/css?family=Arimo:400" rel="stylesheet">
     </head>
     <body>
         <div class="navbar navbar-default navbar-fixed-top" role="navigation">
             <div class="container">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a target="_blank" href="#" class="navbar-brand">Paga y Dale</a>
                 </div>
                 <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav">
                         <li><a href="#">Inicio</a></li>
                         <li class="active"><a href="" target="_blank">Noticias</a></li>
                          <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Explora
                             <span class="caret"></span>
                             </a>
                             <ul class="dropdown-menu">
                                 <li><a href="#">Ayudanos!!</a></li>
                                 <li><a href="#">Acerca de...</a></li>
                                 <li><a href="#">Contacto</a></li>
                             </ul>
                          </li>
                      </ul>
                     <ul class="nav navbar-nav navbar-right">
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <span class="glyphicon glyphicon-user"></span> 
                                 <strong>Nombre</strong>
                                 <span class="glyphicon glyphicon-chevron-down"></span>
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <div class="navbar-login">
                                         <div class="row">
                                             <div class="col-lg-4">
                                                 <p class="text-center">
                                                     <span class="glyphicon glyphicon-user icon-size"></span>
                                                 </p>
                                             </div>
                                             <div class="col-lg-8">
                                                 <p class="text-left"><strong>Nombre Apellido</strong></p>
                                                 <p class="text-left small">correoElectronico@email.com</p>
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
                                                     <a href="#" class="btn btn-danger btn-block">Cerrar Sesion</a>
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
         <br><br><br>
         <hr>
         <br><br>
         <!-- Formulario -->
         <div class="container">
                <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Sobre Mi...</h1>
                            <hr/>
                            <p>Se me ocurrio empezar este proyecto porque soy Desarrollador Web y me parecia una forma
                            comoda y reconfortante de vivir ayudando a los demas... Desde que descubrí el crowsfounding
                            mi futuro esta resuelto y cada dia el de mas gente... Puedes contribuir a nuestro proyecto
                            en Github, a la derecha encontrareis el formulario correspondiente para poder contactar conmigo.
                            </p>
                            <br/>
                            <a href="https://github.com/Borjavaliente/Proyecto-Final" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-5 col-md-offset-3">
                    <div class="well text-center">
                       <p><small>Los campos con * son obligatorios</small></p>
                       <form action="" method="post">
                          <input type='hidden' name='csrfmiddlewaretoken' value='' />
                          <div class="form-group">
                             <input class="form-control" id="id_nome" maxlength="100" name="nome" placeholder="Nombre *" type="text" required="Campo Obligatorio"/>
                          </div>
                          <div class="form-group">
                             <input class="form-control" id="id_email" name="email" placeholder="E-mail*" type="email" required="Campo Obligatorio"/>
                          </div>
                          <div class="form-group">
                             <input class="form-control" id="id_assunto" maxlength="100" name="assunto" placeholder="Asunto *" type="text" required="Campo Obligatorio"/>
                          </div>
                          <div class="form-group">
                             <textarea class="form-control" cols="40" id="id_mensagem" name="mensagem" placeholder="Mensaje *" rows="10" required="Campo Obligatorio"></textarea>
                          </div>
                          <button type="submit" class="btn btn-default">Enviar</button>
                       </form>
                    </div>
                 </div>
             </div>
         </div>
<br><br>
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
         <!--  footer -->
         <footer>
           <div class="container">
             <div class="row">
               <div class="col-md-4 col-sm-6 footerleft ">
                 <div class="logofooter"> Logo</div>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                 <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
                 <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
                 <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>

               </div>
               <div class="col-md-2 col-sm-6 paddingtop-bottom">
                 <h6 class="heading7">GENERAL LINKS</h6>
                 <ul class="footer-ul">
                   <li><a href="#"> Career</a></li>
                   <li><a href="#"> Privacy Policy</a></li>
                   <li><a href="#"> Terms & Conditions</a></li>
                   <li><a href="#"> Client Gateway</a></li>
                   <li><a href="#"> Ranking</a></li>
                   <li><a href="#"> Case Studies</a></li>
                   <li><a href="#"> Frequently Ask Questions</a></li>
                 </ul>
               </div>
               <div class="col-md-3 col-sm-6 paddingtop-bottom">
                 <h6 class="heading7">LATEST POST</h6>
                 <div class="post">
                   <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                   <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                   <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                 </div>
               </div>
             </div>
           </div>
         </footer>
         <!--footer start from here-->

         <div class="copyright">
           <div class="container">
             <div class="col-md-6">
               <p>© 2016 - All Rights with Webenlance</p>
             </div>
             <div class="col-md-6">
               <ul class="bottom_ul">
                 <li><a href="#">webenlance.com</a></li>
                 <li><a href="#">About us</a></li>
                 <li><a href="#">Blog</a></li>
                 <li><a href="#">Contact us</a></li>
               </ul>
             </div>
           </div>
         </div>


             <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
             <!-- usar siempre la última versión de jquery de los servidores de google. Yo recomiendo esta -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
             <script type="text/javascript" src="Recursillos/bootstrap/js/bootstrap.js"></script>
             <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="jquery.min.js"></script>

     </body>
 </html>
