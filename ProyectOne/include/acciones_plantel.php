<?php include "coneccion.php";
// Recuperar e insertar datos        
 if (isset($_POST['btn'])){
    $nombre_plantel= $conex -> real_escape_string($_POST['nombre_plantel']);
    $clave_plantel= $conex -> real_escape_string($_POST['clave_plantel']);
    $direccion_plantel= $conex -> real_escape_string($_POST['direccion_plantel']);
    $telefono_plantel= $conex -> real_escape_string($_POST['telefono_plantel']);
    $responsable= $conex -> real_escape_string($_POST['responsable']);
    if ($nombre_plantel=="" || $clave_plantel=="" || $direccion_plantel=="" || $telefono_plantel=="" || $responsable ==""){
        $alerta ="ALGUNO DE LOS DATOS ESTAN VACIOS";
    }
    else {
 $plantel = "INSERT INTO practica_3.plantel(nombre_plantel, clave_plantel, direccion_plantel, telefono_plantel, responsable) VALUES ('$nombre_plantel', '$clave_plantel', '$direccion_plantel', '$telefono_plantel', '$responsable')";
 $plantel = $conex -> query ($plantel);
 if ($plantel>0){   
    echo "registro exitoso";
}
 else{
    echo "error al registrar";
 }
    }
}
?>