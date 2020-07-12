<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./Framework/Bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="./Framework/Bootstrap/css/admin.css">
    <title>Administrador</title>
    </head>
  <body style="background-color:white;">
<div class="row justify-content-md-center">
 <div class="col-12">
  <br><br>
   <ul class="nav alert-primary">
     <li class="nav-item">
       <h4>Usuario: </h4>
     </li>
     <li class="nav-item">
     ___________________________
     </li>
     <li class="nav-item">
      <h4>Tipo: </h4>
     </li>
    </ul>
   </div>
  </div>

  <div class="row justify-content-md-center">

  <div class="col-3">
  <br><br>
   <ul class="nav flex-column alert-danger">
       <br><br><br>
        <li class="nav-item">
          <a class="nav-link active" href="?controller=Operaciones&action=AbrirCrearUsuario">Crear Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Habilitar/Desahabilitar Usuario</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="#">Ver Inventario</a>
         </li><br><br><br>
    </ul>
  </div>

  <div class="col-9">
  {if isset($ventana)}
  {if $ventana=="vcu"}
      {include file= 'AdminCrearUsuario.tpl'}
  {else if $ventana==""}
      <p>Habilitar</p>
  {else if $ventana==""}
      <p>Inventario</p>
  {else}

  {/if}

  {else}
  <p>Info de la empresa</p>
  {/if}
   </div>
  </div>
  <link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.bundle.min.js">
  </body>
</html>


