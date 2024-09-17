<?php

echo "Ingrese su nombre: ";
$nombre = readline();
echo "Ingrese su edad: ";
$edad = intval(readline());
while ($edad <= 0) {
    echo "Error, ingrese una entrada mayor a 0 \n";
    $edad = intval(readline());
}



function mostrarDatos($name, $age){
    return "Mi nombre es $name y tengo $age";

};
echo mostrarDatos($nombre, $edad);

?>