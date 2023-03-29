<?php include "coneccion.php";
// Recuperar e insertar datos        
 if (isset($_POST['btn'])){
    $nombre= $conex -> real_escape_string($_POST['Nombre']);
    $apellidos= $conex -> real_escape_string($_POST['Apellidos']);
    $direccion= $conex -> real_escape_string($_POST['Direccion']);
    $telefono= $conex -> real_escape_string($_POST['Telefono']);
    $fecha_nac= $conex -> real_escape_string($_POST['FechaN']);
    $email= $conex -> real_escape_string($_POST['Email']);
    if ($nombre=="" || $apellidos=="" || $direccion=="" || $telefono=="" || $fecha_nac=="" || $email ==""){
        $alerta ="ALGUNO DE LOS DATOS ESTAN VACIOS";
    }
    else {
 $registro = "INSERT INTO practica_3.registro(nombre, apellidos, direccion, telefono, fecha_nac, email_lugar) VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$fecha_nac', '$email')";
 $registro = $conex -> query ($registro);
 if ($registro>0){   
    echo "registro exitoso";
}
 else{
    echo "error al registrar";
 }
    }
}
?>
