<?php

class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) 
    {
        if($edad<0 || !is_numeric($edad)) {
            throw new EdadNoValidaExcepcion("Tiene que ser un número mayor a 0");
        }
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

// Nombre de la BD 
//  movies_cac24145
?>