<?php
session_start();
if($_SESSION['rolusuario'] != "admin" ) {
  header("location: index.html");
  session_destroy();
}
?>
