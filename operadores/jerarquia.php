<?php 
$edad = 18;
$traeCredencial = "Si";

// EL OPERADOR AND SOLO ASIGNA EL RESULTADO DEL PRIMER VALOR E IGNORA EL SEGUNDO
// AND TIENE MENOR PRECEDENCIA

// $puedeVotar = $edad>=18 and $traeCredencial==="Si";
// var_dump($puedeVotar);

// A DIFERENCIA DE &&
// ES MEJOR USAR ANDPERSAN PARA ESTE TIPO DE COMPARATIVAS
// SE OBTIENE EL RESULTADO REAL
// HAY MAYOR PRECEDENCIA
$puedeVotar = $edad>=18 && $traeCredencial==="Si";
var_dump($puedeVotar);


?>