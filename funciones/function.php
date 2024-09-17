<?php
// CON DECLARE SE UTILIZA EL MODO ESTRICTO DE PHP
// EN ESTE CASO SE ESTA FORZANDO UNICAMENTE VALORES DEL TIPO INT

declare(strict_types=1);
function ObtenerEdad(int $anio, int $anioActual=2024) {
    $edad = $anioActual - $anio;
    return "La edad es: $edad \n";
};

echo obtenerEdad(2000, 2010);
echo obtenerEdad(2015);
// EL NOMBRE DE UNA FUNCION NO ES SENCIBLE A MAYUSCULAS Y MINUSCULAS
// SE RECONOCERA COMO ERROR SI YA TENEMOS LA MISMA FUNCION DECLARADA CON OTRO CASE

// function obtenerEdad(){

// }

?>