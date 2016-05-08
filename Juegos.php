<?php
class Juegos{
    ///SUBIR Juegos
    public $nombreJuego;
    public $versionJuego;
    public $precioJuego;
    public $fechalanzamientoJuego;
    public $autorJuego;
    ///ELIMINAR Juegos
    public $claveJuego;
    ///APLICAR Ofertas en Juegos


    ///SUBIR Juegos
    public function AltaJuegos($nombreJuego,$versionJuego,$precioJuego,$fechalanzamientoJuego,$autorJuego){
        $this->nombreJuego=$nombreJuego;
        $this->versionJuego=$versionJuego;
        $this->precioJuego=$precioJuego;
        $this->fechalanzamientoJuego=$fechalanzamientoJuego;
        $this->autorJuego=$autorJuego;
        $metejuego = mysqli_query($link,"INSERT INTO Juegos VALUES(null,'$this->nombreJuego','$this->versionJuego','$this->precioJuego','$this->fechalanzamientoJuego','$this->autorJuego')");
        if ($metejuego) {
            echo "Exito";
        }
    }
    ///ELIMINAR Juegos
    public function EliminaJuegos($claveJuego){
        $this->claveJuego=$claveJuego;
        $eliminar= mysqli_query($link,"DELETE * FROM Juegos WHERE idjuego='$this->claveJuego'");
        if ($eliminar) {
            echo "Exito al eliminar";
        }
    }
    ///APLICAR Ofertas en Juegos
    public function AplicaOfertaEnJuegos(){
        
    }

}

 ?>
