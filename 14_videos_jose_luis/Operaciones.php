<?php
if(isset($_POST['btnSumar'])){
    $Numero1 = $_POST['Numero1'];
    $Numero2 = $_POST['Numero2'];
    if(!is_numeric($Numero1)){
        echo "El valor asignado a la caja1 no es un numero";
    }
    else if(!is_numeric($Numero2)){
        echo "El valor asignado a la caja2 no es un numero";
    }
    else{
        $Resultado = $Numero1 + $Numero2;
        echo "El resultado es: ".$Resultado;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operaciones con PHP</title>
</head>
<body>
    <form action= "<?php echo $_SERVER['PHP_SELF']?>" method= "POST">
        <input type= "text" name= "Numero1" placeholder= "Digita primer numero" required>
        <input type= "text" name= "Numero2" placeholder= "Digita segundo numero" required>
        <input type= "submit" value= "Sumar" name= "btnSumar">
    </form>
    
</body>
</html>