<?php
/* foreach(expresion as $Variable){
    acciones que se tardan dentro del bucle
} 
*/
$Arreglo = ["ABCDEFGHIJKLMN",20,'a',4.8,true,false,8];
echo "<pre>\n";
var_dump($Arreglo);
echo "</pre>\n";
foreach($Arreglo as $Recorrido){
    echo "<p>$Recorrido</p>\n";
}
echo "Termina el ciclo <br>";
?>