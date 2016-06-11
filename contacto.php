<?php include("header.php") ?>
    <link rel="stylesheet" href="css/contacto.css" media="screen" title="no title" charset="utf-8">
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
                        <h2 style="text-align:center">Contacta con nosotros</h2><br>
                       <p><small>Los campos con * son obligatorios</small></p>
                       <form action="php/correoContactos.php" method="post">
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
                          <input type="submit" class="btn btn-success" value="Enviar">
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
         </div>
        </div>
         <br><br><br>

<?php include("footer.php") ?>
