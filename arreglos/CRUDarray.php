<?php 

$alumnos = ["Aguztin", "Matias", "Brandon", "Lautaro"];
$datos = [
    "Nombre"=> "Agustin",
    "Apellido"=>"Piuka",
    "Edad" => "21",
];


// ARRAY PUSH AGREGA DATOS
array_push($alumnos, "Luis");
$datos["Colonia"]="Alegria";

// UNSET ELIMINA DATOS DE UN ARRAY
unset($alumnos[1]);
unset( $datos["Apellido"] );

// MODIFICAR UN ELEMENTO DEL ARRAY
$alumnos[1]="Agustin";
$datos["Apellido"]= "Piuca";

var_dump($alumnos);
var_dump($datos);
?>