<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./Framework/Bootstrap/css/bootstrap.min.css">
     <title>Administrador</title>
    </head>
  <body>
<div class="row justify-content-md-center">
<div class="col">
<br><h1>Crear Usuario</h1><br>
 <form align="center" method="post">
  <div class="form-group">
    <label for="exampleInputtext">User</label>
    <input class="sea2" type="text" class="form-control" name="usuario" id="exampleInputtext" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input class="sea" type="password" class="form-control" name="contra" id="exampleInputPassword1">
  </div><br>
    <select class="form-control" name="tipo" id="exampleFormControlSelect1">
      <option>Administrador</option>
      <option>Trabajador</option>
      <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <button id="boton" type="submit" class="btn btn-primary">Guardar Usuario</button>
  </div>
</form>
</div>
</div>
<link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.bundle.min.js">
  </body>
</html>