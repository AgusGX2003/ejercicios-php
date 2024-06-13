<?php 
$nombre = "Agustin";
$apellido = "Piuca";
$numero = 20;
$float = 10.5;
$bool = true;

define("direccion", "alegría");

echo $nombre," ",$numero." ",$float," ",$bool, "\n";

// VER TIPO DE DATO
echo gettype($bool);
echo gettype($float);

// Forzar un tipo de dato "INT"
echo intval($float + $numero);
echo gettype(strval($float));
// STRVAL, BOOLVAR, INTVAL, FLOATVAR, DOUBLEVAR
echo "\n";

// LA CONCADENACION SE HACE A PARTIR DE PUNTOS

echo "hola".$nombre.$apellido;

// INTERPOLACION
echo " hola {$nombre} {$apellido}";
?>