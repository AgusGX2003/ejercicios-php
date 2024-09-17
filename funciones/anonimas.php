<?php 

$mensaje = "La suma es: ";

// declare(strict_types=1);
$suma = function(int $numero1, int $numero2) use ($mensaje) {
    $resultado = $numero1 + $numero2;
    return "$mensaje $resultado";
};

echo $suma(100, 200);
?>