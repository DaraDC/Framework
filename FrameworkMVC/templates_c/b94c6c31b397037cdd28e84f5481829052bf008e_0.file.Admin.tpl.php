<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 01:40:35
  from 'C:\xampp\htdocs\DaraC\Framework\FrameworkMVC\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b9f7334cc24_63664218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94c6c31b397037cdd28e84f5481829052bf008e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaraC\\Framework\\FrameworkMVC\\templates\\Admin.tpl',
      1 => 1594597213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminCrearUsuario.tpl' => 1,
  ),
),false)) {
function content_5f0b9f7334cc24_63664218 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
  <?php if (isset($_smarty_tpl->tpl_vars['ventana']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['ventana']->value == "vcu") {?>
      <?php $_smarty_tpl->_subTemplateRender('file:AdminCrearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['ventana']->value == '') {?>
      <p>Habilitar</p>
  <?php } elseif ($_smarty_tpl->tpl_vars['ventana']->value == '') {?>
      <p>Inventario</p>
  <?php } else { ?>

  <?php }?>

  <?php } else { ?>
  <p>Info de la empresa</p>
  <?php }?>
   </div>
  </div>
  <link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./Framework/Bootstrap/js/bootstrap.bundle.min.js">
  </body>
</html>


<?php }
}
