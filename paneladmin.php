<?php

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Panel de Administrador</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="webadmin2.css" media="screen" title="no title" charset="utf-8">
        <script type="text/javascript">
    		$(document).ready(function() {
    			$('#fullpage').fullpage({
    				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
    				anchors: ['firstPage', 'secondPage', '3rdPage'],
    				menu: '#menu',
    				loopTop: true,
    				loopBottom: true
    			});
    		});
    	</script>
    </head>
    <body>
        <header>
            <ul id=menu>
                <li data-menuanchor="gestionUsuarios" class="active"><a href="#gestionUsuarios">Gestion de Usuarios</a></li>
                <li> </li>
            </ul>
        </header>

        <section>

        </section>

        <footer>

        </footer>
        <!-- Librerias de JavaScript -->
        <script src="js/jquery.min.js" charset="utf-8"></script>
        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="js/npm.js" charset="utf-8"></script>
        <script src="js/jsquer.fullPage.min.js" charset="utf-8"></script>

    </body>
</html>
