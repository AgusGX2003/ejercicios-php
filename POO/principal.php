<?php 

include "persona.php";
include "listaPersonas.php";

// CREAR INSTANCIAS DE PERSONA
try {
    $persona1 = new Persona("Agustin", 21);
    $persona2 = new Persona("Federico", 30);
    $persona3 = new Persona("Matias", 26);
    $persona4 = new Persona("Matias", 20);
    
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