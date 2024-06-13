<?php 

class EdadNoValidaExcepcion extends Exception {
    
}

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

class ListaPersonas {
    private $lista=[];

    public function agregarPersona(Persona $persona){
        $this->lista[]=$persona;
    }

    public function obtenerLista(){
        return $this->lista;
    }
}

include "persona.php";
include "listaPersonas.php";

// CREAR INSTANCIAS DE PERSONA
try {
    $persona1 = new Persona("Agustin", 21);
    $persona2 = new Persona("Federico", 30);
    $persona3 = new Persona("Matias", 26);
    $persona4 = new Persona("Matias", -5);
    
    // CREAR INSTANCIA DEL TIPO ListaPersona
    // INSTANCIA -> OBJETO
    
    $listaPersonas = new ListaPersonas();
    $listaPersonas->agregarPersona($persona1);
    $listaPersonas->agregarPersona($persona2);
    $listaPersonas->agregarPersona($persona3);

}

catch(Exception $e) {
    echo "Error general".$e->getMessage();
}

catch(EdadNoValidaExcepcion $e) {
    echo "Error".$e->getMessage();
}
// Imprimir lista en consola
$listado=$listaPersonas->obtenerLista();

foreach($listado as $persona) {
    echo "Nombre: ".$persona->nombre." Edad: ".$persona->edad."\n";
}

?>