<?php
// una practica que calcule el promedio de 6 notas o calificando y verificando que los valores sean numericos y posteriormente 
// indicar si esta aprobado o reprobado segun el valor por el promedio
$Calificacion1 = 8;
$Calificacion2 = 10;
$Calificacion3 = 8;
$Calificacion4 = 9;
$Calificacion5 = 9;
$Calificacion6 = 7;
$minimo = 7;
/*
if(is_numeric($Calificacion1) && is_numeric($Calificacion2) && is_numeric($Calificacion3) && is_numeric($Calificacion4) && is_numeric($Calificacion5) && is_numeric($Calificacion6)){
    $Promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5+$Calificacion6)/6;
    if($Promedio >= $minimo){
        echo "<br><br> Tu Promedio es de: ".$Promedio." por lo tanto estas Aprobado";
    }
    else{
        echo "<br><br> Tu Promedio es de: ".$Promedio." por lo tanto estas Reprobado";
    }
}
else{
    $mensaje = "Alguno de los valores contenidos en las calificaciones no corresponde a un valor numerico";
    echo $mensaje;
}
*/
if(is_numeric($Calificacion1)){
    $Calificacion1 = $Calificacion1;
}
else{
    echo "El valor de la calificacion 1 no es un numero";
}
if(is_numeric($Calificacion2)){
    $Calificacion2 = $Calificacion2;
}
else{
    echo "El valor de la calificacion 2 no es un numero";
}
if(is_numeric($Calificacion3)){
    $Calificacion3 = $Calificacion3;
}
else{
    echo "El valor de la calificacion 3 no es un numero";
}
if(is_numeric($Calificacion4)){
    $Calificacion4 = $Calificacion4;
}
else{
    echo "El valor de la calificacion 4 no es un numero";
}
if(is_numeric($Calificacion5)){
    $Calificacion5 = $Calificacion5;
}
else{
    echo "El valor de la calificacion 5 no es un numero";
}
if(is_numeric($Calificacion5)){
    $Calificacion5 = $Calificacion5;
}
else{
    echo "El valor de la calificacion 5 no es un numero";
}
if(is_numeric($Calificacion6)){
    $Calificacion6 = $Calificacion6;
}
else{
    echo "El valor de la calificacion 6 no es un numero";
}
$Promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5+$Calificacion6)/6;
if($Promedio >= $minimo){
    echo "Felicidades Aprobaste :".$Promedio."";
}
else{
    echo "Lo siento estas Reprobado por baja calificacion :".$Promedio."";
}
?>