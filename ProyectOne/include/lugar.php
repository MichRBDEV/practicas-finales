<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUGAR</title>
</head>
<body>
    <div class="container m-o contents-justify-center py-2">
        <div class="row text_center">
            <h1 class="text_sucess">Lugar</h1>
</div>
<form id="lugar" Action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="nombre_lugar" class= "form_control" placeholder="Nombre del Lugar" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="descripcion" class= "form_control" placeholder="Descripcion" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="telefono_lugar" class= "form_control" placeholder="Telefono" required>
    </div>
</div>

<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="Email" name="email_lugar" placeholder="Email"  class= "form-control" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="Facebook" class= "form_control" placeholder="Facebook" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="text" name="horario" class= "form_control" placeholder="Horario" required>
    </div>
</div>
<div class="row text_center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type ="submit" value="Registrar" name="btn" class="btn btn-sucess">
    </div>
</div>
</form>
<?php include "acciones_lugar.php"?>
<?php include "coneccion.php"?>
    
</body>
</html>