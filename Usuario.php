<?php
class Usuario {
    //------ACTIVAR USUARIO------
    public $nombresocitoActivarUsuario;
    public $clavesocitoActivarUsuario;
    //-----ALTA USUARIO-------
    public $nombreAltaUsuario;
    public $apellidoAltaUsuario;
    public $nickAltaUsuario;
    public $contrasenaAltaUsuario;
    public $correoAltaUsuario;
    public $cumpleaniosAltaUsuario;
    //-------BAJA USUARIO---------
    public $clavesocitoBajaUsuario;
    //-------BLOQUEO USUARIO---
    public $clavesocitoBloqueaUsuario;
    //------DESBLOQUEA USUARIO----
    public $clavesocitoDesbloq;

    public function activarusuario($nombresocitoActivarUsuario, $clavesocitoActivarUsuario) {
      $this->nombresocitoActivarUsuario=$nombresocitoActivarUsuario;
      $this->clavesocitoActivarUsuario=$clavesocitoActivarUsuario;
      $consultaza=mysqli_query($link,"UPDATE Usuario SET estado='ACTIVO' WHERE idusuario='$clavesocitoActivarUsuario'");
      if ($consultaza != "") {
          echo "Exito al activar";
     }
 }

    public function altausuario($nombreAltaUsuario, $apellidoAltaUsuario, $nickAltaUsuario, $contrasenaAltaUsuario, $correoAltaUsuario, $cumpleaniosAltaUsuario){
       $this->nombreAltaUsuario=$nombreAltaUsuario;
       $this->apellidoAltaUsuario=$apellidoAltaUsuario;
       $this->nickAltaUsuario=$nickAltaUsuario;
       $this->contrasenaAltaUsuario=$contrasenaAltaUsuario;
       $this->correoAltaUsuario=$correoAltaUsuario;
       $this->cumpleaniosAltaUsuario=$cumpleaniosAltaUsuario;
       $insertar=mysqli_query($link,"INSERT INTO Usuario VALUES(null,'$this->nombreAltaUsuario','$this->apellidoAltaUsuario','$this->nickAltaUsuario','$this->contrasenaAltaUsuario',
           '$this->correoAltaUsuario','$this->cumpleaniosAltaUsuario', 'activo')") or die(mysqli_error());;
       if($insertar){
         echo "Se ha insertado el nombre en la bd";
        }
    }


     public function bajausuario($clavesocitoBajaUsuario){
       $this->clavesocitoBajaUsuario=$clavesocitoBajaUsuario;
       if ($this->clavesocitoBajaUsuario){
         $consultaza=mysqli_query($link,"UPDATE Usuario SET estado='BAJA' WHERE clavesocio='$clavesocitoBajaUsuario'");
         echo "DADO de baja";
        }
     }

     public function bloquearusuario($clavesocitoBloqueaUsuario){
       $this->clavesocitoBloqueaUsuario=$clavesocitoBloqueaUsuario;
       if($this->clavesocitoBloqueaUsuario){
         $consultilla = mysqli_query($link,"UPDATE Usuario SET estado='BLOQUEADO' WHERE clavesocio='$this->clavesocitoBloqueaUsuario'");
         echo "BLOQUEADO.............";
       }
     }
     public function desbloqueausuario($clavesocitoDesbloq){
       $this->clavesocitoDesbloq = $clavesocitoDesbloq;
       if ($this->clavesocitoDesbloq){
         $con = mysql_query($link,"UPDATE Usuario SET estado='activo' WHERE clavesocio='$this->clavesocitoDesbloq'");
         echo "Exito al desbloquear";
       }
     }
}
?>
