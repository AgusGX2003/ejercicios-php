<?php 
$animales2 = [
    "Felinos" => ["Puma","Jaguar","Lince"],
    "Aves"=> ["Paloma","Pato","Tucan"],
    "Reptiles" => ["Serpiente","Cocodrilo","Tortuga"],
];

foreach ($animales2 as $key => $clasificacion ) {
    echo "\n $key: \n";
    foreach ($clasificacion as $animal) {
    echo $animal." " ;
    };
};
?>