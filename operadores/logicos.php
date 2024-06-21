<?php 
// OPERADOR AND o &&
// SE PUEDEN UTILIZAR AND Y &&

$edad = 18;
$esMayor = $edad>=18;
$regalo = "Si";
$traeRegalo = $regalo == "Si";

var_dump( $esMayor && $traeRegalo);

// OPERADOR OR
// OR o ||
$edad = 15;
$esMayor = $edad>=18;
$regalo = "Si";
$traeRegalo = $regalo == "Si";

var_dump( $esMayor || $traeRegalo);

// OPERADOR XOR
// SOLO UN VALOR PUEDE SER VERDADERO, NO AMBOS
$edad = 18;
$esMayor = $edad>=18;
$regalo = "Si";
$traeRegalo = $regalo == "Si";

var_dump( $esMayor xor $traeRegalo);

// OPERADOR NOT !

$edad = 15;
$esMayor = $edad>=18;
$regalo = "Si";
$traeRegalo = $regalo == "Si";

var_dump(!$esMayor);


?>