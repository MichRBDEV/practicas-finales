<?php / recuperar e insertar datos
 include "coneccion.php";
 if (sset($_POST['btn'])){
    $nombre = $conecta -> real_escape_string($_POST['nombre']);
    $apellidos = $conex -> real_escape_string($_POST['apellidos']);
    $direccion = $conex -> real_escape_string($_POST['direccion']);
    $telefono = $conex -> real_escape_string($_POST['telefono']);
    $fecha_nac = $conex -> real_escape_string($_POST['fecha_nac']);
    $email = $conex -> real_escape_string($_POST['email']);
    if ($nombre == " " || $apellidos == " " || $direccion == " " || $telefono == " " || $fecha_nac == " " || $email == " "){
        $alerta = "ALGUNO DE LOS DATOS ESTAN VACIOS";
    }
    else {
 $registro = "INSERT INTO Usuario(nombre, apellidos, direccion, telefono, fecha_nac, email) VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', 'fecha_nac', 'email')";
 $registro = $conex -> query ($registro);
 if ($registros>o)
    }
    echo "registro exitoso";
 }else{
    echo "error al registrar";
 }

?>
 