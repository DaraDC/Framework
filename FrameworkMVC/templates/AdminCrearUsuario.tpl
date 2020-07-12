<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./Framework/Bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="./Framework/Bootstrap/css/crear.css">
     <title>Administrador</title>
    </head>
  <body>
<div class="row justify-content-md-center">
<div class="col">
<br><h1 align="center">Crear Usuario</h1><br>
 <form method="post" action="" align="center">
  <div class="form-group">
    <label for="usuario">Usuario</label>
    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="contra" id="password">
  </div><br>
  <div class="form-group">
  <label for="tipo">Tipo</label>
    <select class="form-control" name="tipo" id="tipo">
      <option value="Administrador">Administrador</option>
      <option value="Trabajador">Trabajador</option>
      </select>
      </div><br>
     <button id="boton" type="submit" class="btn btn-primary">Guardar Usuario</button>
</form>
</div>
</div>
<link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.bundle.min.js">
  </body>
</html>