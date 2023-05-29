<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="mapa.js"></script>
    <title>Formulario</title>
</head>
<body>
<div id="maps"></div>
<form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <input type="checkbox" role="switch" id="aviso" onclick="activar(this);">
    <a href="#" class="text-decoration-none text-muted" data-bs-taggle="modal" data-bs-target="#Terminos">Acepto terminos y condiciones</a>
    <input type="submit" id="btnRegistrar" value="Send">
  </div>
</form>
<script>
    //desabilitar el boton de registrar
    document.getElementById('btnRegistrar').disabled = true;
    function activar(cb){
      if(cb.checked){
        document.getElementById('btnRegistrar').disabled = false;
      }
      else{
        document.getElementById('btnRegistrar').disabled = true;
      }
    }
    


  </script>
  <style>
    /* Set the size of the div element that contains the map */
#map {
  height: 400px; /* The height is 400 pixels */
  width: 100%; /* The width is the width of the web page */
}

  </style>
  <script>
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC9Ze1zrjSwsYoxjd3khfN184QbXeES3A=initMap&v=weekly"
      defer></script>
</body>
</html>