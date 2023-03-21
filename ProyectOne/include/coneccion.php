<?php
$Servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "practica_3";
$conex = mysqli_connect($Servidor,$usuario,$password,$bd);
if($conex->connect_error){
    die("Error al conectar la bd ".$conex->connect_error);
}
?>