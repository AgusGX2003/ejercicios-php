<?php 
$array = ["Agustin", "Juan", "Brandon"];
$nombre = ["Brandon"];

foreach($array as $name) {
    echo "Mi nombre es $name \n";
}
echo $array[2];

foreach($array as $index=> $name) {
    echo "Mi nombre es $index \n";
}
echo $array[2];

?>