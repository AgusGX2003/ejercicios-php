<?php 
// $RFC = "91 75 1A EC C7";
// $buscar = " " ;
// $reemplazar = ":";
// $resultado = str_replace($buscar,$reemplazar,$RFC);
// echo $resultado;
// $buscar = preg_replace($buscar,$reemplazar);

$anio = "2003";
$mes = "03";
$dia = "06";
$formato = "%s-%s-%s";
echo sprintf($formato,$dia,$mes,$anio);
?>