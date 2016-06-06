<?php include("header.php") ?>

    <link rel="stylesheet" href="css/donar.css" media="screen" title="no title" charset="utf-8">
        <br><br><br>
        <div class="container">
            <br><br><br><br>
            <!--
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for=""><h3>Cantidad a donar</h3></label>
                        <input type="number" max="100" min="1">
                    </div>
                </div>
            </div>
        -->
            <br><br><br><br>
            <div class="row">
                <!-- You can make it whatever width you want. I'm making it full width
                     on <= small devices and 4/12 page width on >= medium devices -->
                <div class="col-md-6 ">
                <!-- CREDIT CARD FORM STARTS HERE -->
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                        <div class="row display-tr" >
                            <h3 class="panel-title display-td"></h3>
                            <div class="display-td" >
                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form"  method="post" action="php/agregarDonacion.php">
                            <!-- id="payment-form" -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="control-group">
                                        <label class="control-label">Cantidad</label><br>
                                        <input type="number" name="cantidad" value="" min="1" max="100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">

                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="btn btn-success btn-lg" type="submit" value="Donar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDIT CARD FORM ENDS HERE -->

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-4">
                <img class="imgdonar" src="img/donar.jpg" alt="" />
            </div>
        </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-md-8" class="razones" style="font-size: 12pt; line-height: 2em;">
                <p><h1><strong>5 Razones por las que Donar:</strong></h1>
                    <ul>
                        <li>Porque ayudaras a gente a cumplir su sueño.</li>
                        <li>Porque las ideas nunca faltan.</li>
                        <li>Porque nos gusta lo que hacemos.</li>
                        <li>Porque necesitamos tu apoyo.</li>
                        <li>Porque nos gusta estar conecta2.</li>
                    </ul>
                </p>
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

                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
                 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
                 <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
                 <script type="text/javascript" src="js/donar.js"></script>

<?php include("footer.php") ?>
