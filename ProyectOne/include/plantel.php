<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLANTEL</title>
</head>
<body>
    <div class="container m-o contents-justify-center py-2">
        <div class="row text_center">
            <h1 class="text_sucess">PLANTEL</h1>
</div>
<form id="plantel" Action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="nombre_plantel" class= "form_control" placeholder="Nombre del Plantel" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="clave_plantel" class= "form_control" placeholder="Clave" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="direccion_plantel" class= "form_control" placeholder="Direccion del Plantel" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="telefono_plantel" class= "form_control" placeholder="Telefono del Plantel" required>
    </div>
</div>

<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="responsable" placeholder="Responsable de Plantel"  class= "form-control" required>
    </div>

<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="submit" value="Registrar" name="btn" class="btn btn-sucess">
    </div>
</div>
</form>
<?php include "acciones_plantel.php"?>
<?php include "coneccion.php"?>
    
</body>
</html>