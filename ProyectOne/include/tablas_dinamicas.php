<?php  
include 'coneccion.php';
// consulta
$consulta = "SELECT * FROM registro";
$guardar = $conex->query($consulta);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/preloader.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://upkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="js/jquery-3.5.1.min.js"></script>
	<title>Login de Usuario</title>
</head>




<body>
  <div class="row text-center">
<table class="table">
      <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>fecha_nac</th>
        <th>email_lugar</th>
      </thead>

      <?php while($row = $guardar->fetch_array()){?>
        <tr>
          <td><?php echo $row['Id_registro']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['apellidos']; ?></td>
          <td><?php echo $row['direccion']; ?></td>
          <td><?php echo $row['telefono']; ?></td>
          <td><?php echo $row['fecha_nac']; ?></td>
          <td><?php echo $row['email_lugar']; ?></td>
        </tr>
<?php } ?>

</table>
</div>
</div>
</body>