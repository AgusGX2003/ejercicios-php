<?php 
$camisa = "Verde";
// EN MATCH N SE PUEDEN COLOCAR BLOQUES DE CODIGO
// COMO SUMA O RESTA
// A DIFERENCIA DE SWITCH CASE
echo match ($camisa) {
    "Gris" => "Encontre camiseta gris",
    "Amarillo" => "Encontre camiseta amarilla",
    "Rojo" => "Encontre camiseta roja",
    "Verde" => "Encontre camiseta verde",
    
};

?>