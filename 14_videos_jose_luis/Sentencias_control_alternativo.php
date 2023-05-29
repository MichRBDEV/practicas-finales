<?php
/* Utilizar las sentencias de flujo if y else en su metodo alterno utilizar constantes, variables, operadores aritmeticos, logicos y de relacion
    Ejercicio : Calcular la edad con años, meses, dias y horas utilizando un año de Nacimiento e indicando si es mayor o menor de edad imprimiendo los datos
    como años,meses, dias y horas 
*/
define('Tope', 2023);
define('Meses', 12);
define('Dias', 364);
define('Horas', 24);
$Nacimiento = 2004;
$Mayoria = 18;
$Edad = Tope - $Nacimiento;
$Meses = $Edad * Meses;
$Dias = $Edad * Dias;
$Horas = Dias * Horas * $Edad;
if(is_numeric($Nacimiento) && is_numeric($Mayoria) && is_numeric($Edad) && is_numeric($Meses) && is_numeric($Dias) && is_numeric($Horas)):
    if($Edad >= $Mayoria):   
        echo "Eres Mayor de Edad porque ";
        echo "tienes: ".$Edad." años de vida</br>";
        echo "son: ".$Meses." meses de vida</br>";
        echo "son: ".$Dias." dias de vida</br>";
        echo "son: ".$Horas." horas de vida</br>";  
else:
        echo "Eres Menor de Edad porque ";
        echo "tienes: ".$Edad." años de vida</br>";
        echo "son: ".$Meses." meses de vida</br>";
        echo "son: ".$Dias." dias de vida</br>";
        echo "son: ".$Horas." horas de vida</br>";
     endif;
else:
        echo "Alguno de los valores asignados no son valores numericos";
    
    endif;
?>