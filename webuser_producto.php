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
        <link rel="stylesheet" href="webuser_producto.css" media="screen" title="no title" charset="utf-8">
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
                    <a target="_blank" href="#" class="navbar-brand">My sApp.</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Inicio</a></li>
                        <li class="active"><a href="http://bootsnipp.com/snippets/featured/nav-account-manager" target="_blank">Inspirado en este ejemplo</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">DropDown
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Link 2</a></li>
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
        <!-- Descripcion del producto -->
        <div class="container-fluid">
            <div class="content-wrapper">
        		<div class="item-container">
        			<div class="container">
        				<div class="col-md-12">
        					<div class="product col-md-10 service-image-left">
        						<center>
        							<img id="item-display" src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
        						</center>
        					</div>
        					<div class="container service1-items col-sm-2 col-md-2 pull-left">
        						<center>
        							<a id="item-1" class="service1-item">
        								<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
        							</a>
        							<a id="item-2" class="service1-item">
        								<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_3.png" alt=""></img>
        							</a>
        							<a id="item-3" class="service1-item">
        								<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
        							</a>
        						</center>
        					</div>
        				</div>
        				<div class="col-md-11">
                            <br><br><br>
                            <center>
        					<div class="product-title">Corsair GS600 600 Watt PSU</div>
        					<div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
        					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
        					<hr>
        					<div class="product-price">$ 1234.00</div>
        					<div class="product-stock">In Stock</div>
        					<hr>
        					<div class="btn-group cart">
        						<button type="button" class="btn btn-success">
        							Add to cart
        						</button>
        					</div>
        					<div class="btn-group wishlist">
        						<button type="button" class="btn btn-danger">
        							Add to wishlist
        						</button>
        					</div>
                        </center>
        				</div>
        			</div>
        		</div>
        		<div class="container-fluid">
        			<div class="col-md-12 product-info">
        					<ul id="myTab" class="nav nav-tabs nav_tabs">

        						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
        						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
        						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

        					</ul>
        				<div id="myTabContent" class="tab-content">
        						<div class="tab-pane fade in active" id="service-one">

        							<section class="container product-info">
        								The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

        								<h3>Corsair Gaming Series GS600 Features:</h3>
        								<li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
        								<li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
        								<li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
        								<li>0.99 Active Power Factor Correction provides clean and reliable power</li>
        								<li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
        								<li>Extra long fully-sleeved cables support full tower chassis</li>
        								<li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
        								<li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
        								<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
        								<li>MTBF: 100,000 hours</li>
        								<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
        							</section>
        						</div>
        					<div class="tab-pane fade" id="service-two">
        						<section class="container">

        						</section>
        					</div>
        					<div class="tab-pane fade" id="service-three">
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
            </div> <!-- /.row -->
        </div> <!-- /.
        <!- chat -->
        
        <!-- Footer -->
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
              <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                  </div>
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
