<?php 
// OPERADOR DE ASIGNACION =
// OPERADOR DE ASIGNACION POR REFERENCIA =&

$a = 10;

$b = $a;

echo $b;
echo "\n";

$c = 20;

// CON EL OPERADOR DE ASIGNACION POR REFERENCIA
// EL VALOR D SIEMPRE ACTUALIZARA AUTOMATICAMENTE SU VALOR AL QUE TIENE C
// SIEMPRE SE ASIGNA EL VALOR DE C a D, NO IMPORTA EL VALOR QUE TENGA


$d =& $c;
echo $d;
echo "\n";
$c = 30;

echo $d;
echo "\n";

// OPERADOR DE ASIGNACION PARA CONCATENAR ".="
$saludo = "Hola ";
$saludo .= "Agustin ";
$saludo .= "Bienvenido";

echo $saludo;

// HOLA AGUSTIN BIENVENIDO

$num = 20;
echo $num += 20;

?>