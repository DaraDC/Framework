<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 01:00:18
  from 'C:\xampp\htdocs\DaraC\Framework\FrameworkMVC\templates\AdminCrearUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b9602781809_62100499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521dea140a7da09033d3dbaf1d2e92d6e70d9e93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaraC\\Framework\\FrameworkMVC\\templates\\AdminCrearUsuario.tpl',
      1 => 1594594816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0b9602781809_62100499 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
</html><?php }
}
