<?php

function obtenerArea(int $a,int $b) {
    $area = $b * $a;
    return $area;
}

function obtenerPerimetro(int $a,int $b) {
    $area = 2*($b + $a);
    return $area;
}

echo "Ingrese la altura: ";
$altura = intval(readline());
while ($altura <= 0) {
    echo "Error, ingrese una entrada mayor a 0: \n";
    echo "Ingrese la altura: ";
    $altura = intval(readline());
}

echo "Ingrese la base: ";
$base = intval(readline());
while ($base <= 0) {
    echo "Error, ingrese una entrada mayor a 0 \n";
    echo "Ingrese la base: ";
    $base = intval(readline());
}

echo "El area del rectángulo es: ".obtenerArea($altura, $base) ."\n";
echo "El perímetro del rectángulo es: ".obtenerPerimetro($altura, $base) ."\n";



?>