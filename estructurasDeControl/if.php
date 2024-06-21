<?php 
// IF
$promedio = 8;
$faltas = true;

if($promedio >= 7 && !$faltas) {
    echo "Aprobaste la materia";
} else if ($faltas){
    echo "Reprobaste por faltas";
}else {
    echo "Reprobaste la materia";
}
echo"\n";
echo ($promedio>=7 && !$faltas) ?"Aprobaste":"Reprobaste";


?>