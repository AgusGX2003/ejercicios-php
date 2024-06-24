<?php 
$datos = [
    "nombre"=>"Agustin",
    "apellido"=>"Piuca",
    "edad"=> "21",
];

foreach($datos as $key =>$valor){
    echo "$key: ". $valor ."\n";
};

?>