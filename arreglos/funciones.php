<?php 

$alumnos = ["Aguztin", "Matias", "Brandon", "Lautaro"];
$numeros = [5, 10, 2, 13, 9];
$datos = [
    "Nombre"=> "Agustin",
    "Apellido"=>"Piuka",
    "Edad" => "21",
];

// COUNT CUENTA LA CANTIDD DE ELEMENTOS DEL ARRAY
var_dump(count($alumnos));
var_dump(count($datos));


// ASORT ORDENA LOS NOMBRES DE UN ARRAY ALFABETICAMENTE
// Y NUMERICAMENTE
// asort($datos);
// asort($alumnos);
// asort($numeros);

// var_dump($numeros);
// var_dump($datos);
// var_dump($alumnos);

// ORDEN A LA INVERSA "ARSORT"
// arsort($datos);
// arsort($alumnos);
// arsort($numeros);

// var_dump($numeros);
// var_dump($datos);
// var_dump($alumnos);

// BUSQUEDA Y REEMPLAZO

$index = array_search("Aguztin", $alumnos);
$key = array_search("21", $datos);
var_dump($alumnos[$index]);
var_dump($datos[$key]);


$alumnosCorreccion = array_replace($alumnos, [
    0=> "Agustin",
    1=> "Jose",
]);
$key = array_search("21", $datos);
var_dump($alumnosCorreccion);
var_dump($datos[$key]);
?>