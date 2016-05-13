<?php
session_start();
if($_SESSION['rolusuario'] != "usuario" ) {
  header("location: index.html");
  session_destroy();
}
?>
