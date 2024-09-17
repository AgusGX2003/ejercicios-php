<?php 

$animales = [
    ["Puma","Jaguar","Lince"],
    ["Paloma","Pato","Tucan"],
    ["Serpiente","Cocodrilo","Tortuga"],
];

echo $animales[0][1]."\n"; // JAGUAR
// $animales = [

// ]

$animales2 = [
    "Felinos" => ["Puma","Jaguar","Lince"],
    "Aves"=> ["Paloma","Pato","Tucan"],
    "Reptiles" => ["Serpiente","Cocodrilo","Tortuga"],
];

echo $animales2["Reptiles"][1]; // COCODRILO
?>