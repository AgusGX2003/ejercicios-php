<?php 
// Metodo para extraer datos de una cadena de texto
// el primer numero es de donde empiza y el ultimo cuanto sera el tamaño
$apellido = substr("Agustin Piuca Quevedo", 8,5);
echo $apellido;

$bienvenida = "Bienvenido al mundo de la programacion
hola programacion";
$palabra = "programacion";

// El primer valor es la cadena de texto completa
// El segundo valor es el valor a buscar dentro de la cadena
// Imprime la posición donde se encuentre el valor
$buscar = strpos($bienvenida, $palabra,27);
echo $buscar;

$extraccion = substr($bienvenida,$buscar);
echo $extraccion;

?>