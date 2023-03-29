
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
</head>
<body>
    <div class="container m-o contents-justify-center py-2">
        <div class="row text_center">
            <h1 class="text_sucess">Registro</h1>
</div>
<form id="Registro" Action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="Nombre" class= "form_control" placeholder="Nombre" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="Apellidos" class= "form_control" placeholder="Apellidos" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <textarea class= "form-control" name="Direccion">Direccion </textarea>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="Telefono" class= "form_control" placeholder="Telefono" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="DATE" name="FechaN" class= "form_control"  required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="Email" name="Email" placeholder="Email"  class= "form-control" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="submit" value="Registrar" name="btn" class="btn btn-sucess">
    </div>
</div>
</form>
<?php include "acciones.php"?>
<?php include "coneccion.php"?>
    
</body>
</html>