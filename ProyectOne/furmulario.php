<?php
  error_reporting(0);
if (isset($_POST['btn'])){
  $numero1 = $_POST['caja1'];
  $numero2 = $_POST['caja2'];
  $numero1 = (int)$numero1;
  $numero2 = (int)$numero2;
  $resultado = $numero1 + $numero2;
  $valor = $resultado;
  echo $valor;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-lg.12">
        <div class="row">
            <h1 class="text-center">Suma</h1>
        </div>
        <div class="row">
            <form action="<?php echo $server [PHP_SELF];?>" Method="post">
            <input type="text" name="caja1" requerid>+
            <input type="text" name="caja2" requerid>=
            <input type="text" name="resultado value=" ?php echo$ valor;?>
            <input type="submit" value="calcular" name="btn">

            </form>
        </div>
        <div class></div>
    </div>
</body>
</html>