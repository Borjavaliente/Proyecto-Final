<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    <!-- script para las visitas en tu web en tiempo real -->
    <script id="_wauwaa">var _wau = _wau || []; _wau.push(["classic", "zltotgacrhd9", "waa"]);
        (function() {var s=document.createElement("script"); s.async=true;
        s.src="http://widgets.amung.us/classic.js";
        document.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
  </head>
  <body background="img/fondo4.jpg">
      <br><br><br><br>
    <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registro</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="php/validarLogin.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recuerdame </label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="" tabindex="5" class="forgot-password">Olvidaste tu contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
                                <!-- FORMULARIO PARA AGREGAR USUARIOS -->
								<form id="register-form" action="php/agregaUsuarioIndex.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="nick" id="username" tabindex="1" class="form-control" placeholder="Nick" value="" required="Campo Obligatorio">
									</div>
                                    <div class="form-group">
                                        <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre" value="" required="Campo Obligatorio">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="apellidos" id="apellido" tabindex="1" class="form-control" placeholder="Apellido" value="" required="Campo Obligatorio">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" id="datefield" name="fecha" value="" class="form-control"
                                          required="Campo Obligatorio" min='1899-01-01' max='1998-01-01' tabindex="1">
                                    </div>
									<div class="form-group">
										<input type="email" name="correo" id="email" tabindex="1" class="form-control" placeholder="E-mail" value="" required="Campo Obligatorio">
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required="Campo Obligatorio">
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contraseña" required="Campo Obligatorio">
									</div>
                                    <div class="form-group">
                                        <input type="file" name="imagen" id="" tabindex="2" class="form-control" >
                                    </div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar ya!">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <center>
    <div class="container">
    	<div class="row">
    		<h1>
                <script type="text/javascript" src="http://100widgets.com/js_data.php?id=255"></script><br><br>
            </h1>
    	</div>
    <br><br>


    <!-- LLAMADA A LOS SCRIPTS DE JAVASCRIPTS Y LIBRERIAS DE JAVASCRIPTS EXTERNAS -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/index1.js"></script>
  <script type="text/javascript" src="js/index2.js"></script>
  <script type="text/javascript" src="js/index3.js"></script>
  <script type="text/javascript" src="js/index4.js"></script>
  </body>
</html>
