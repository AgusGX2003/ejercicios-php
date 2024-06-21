<?php 
// OPERADOR TERNARIO (OPERANDO)?OPERANDO:OPERANDO

// $promedio = 7;
// $aprobo = ($promedio>=7)?"Aprobaste":"Reprobaste";
// echo $aprobo;
echo "\n";
// OPERADOR ELVIS ?:
// VERIFICA SI EXISTE UN DATO DENTRO DE LA VARIABLE
// SI NO COLOCAMOS NADA EN LA VARIABLE DEL OPERADOR ELVIS NOS VA A SOLTAR ERROR
// $promedio;
// $aprobo = ($promedio)?:5;
// echo $aprobo;

// OPERADOR FUSION null ??
// SE VE LA VARIABLE Y SI NO TIENE NADA POR DEFECTO TENDRA 5
// SE UTILIZA PARA TESTEAR FUNCIONES

$promedio;

$aprobo = ($promedio)??5;
echo $aprobo
?>