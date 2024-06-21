<?php 

$saludar = "Hola";
echo <<<Frase
$saludar
'Esto es una frase de heredoc'
Frase;

$segundaFrase = <<<'Frase2'
$saludar
'Esto es una frase de heredoc'
Frase2;

echo $segundaFrase;


?>