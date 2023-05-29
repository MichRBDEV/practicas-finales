<?php
if(isset($_POST['Enviar'])){
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$FechaN = $_POST['FechaN'];
$Email = $_POST['Email'];
if($Nombre == ""){
    echo "Falto poner tu Nombre";
}
else if($Apellidos == ""){
    echo "Falto poner tus Apellidos";
}
else if($FechaN == ""){
    echo "Falto poner tu Fecha de Nacimiento";
}
else if($Email == ""){
    echo "Falto poner tu Email";
}
else{
    echo "Tu nombre es: ".$Nombre." tus apellidos son: ".$Apellidos." tu fecha de nacimientos es: ".$FechaN." tu email es: ".$Email;
}
}
else{
echo "Dale click al boton";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar datos del formulario PHP</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "POST">
        <input type= "text" name= "Nombre" placeholder= "Nombre(s)" /><br>
        <input type= "text" name= "Apellidos" placeholder= "Apellidos" /><br>
        <label for= "FechaN">Selecciona tu Fecha de Nacimiento</label><input type= "date" name= "FechaN" /><br>
        <input type= "email" name= "Email" placeholder= "@gmail.com" /><br>
        <input type= "submit" value= "Enviar" name= "Enviar" /><br>
    </form>
    
</body>
</html>