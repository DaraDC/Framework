<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-06 20:09:28
  from 'C:\xampp\htdocs\DaraC\Framework\FrameworkMVC\templates\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0368d8200f18_01330664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfc0d24e41e081fdae467e8c5bfd954c58fd112' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaraC\\Framework\\FrameworkMVC\\templates\\Inicio.tpl',
      1 => 1594058792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0368d8200f18_01330664 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
 <form align="center" method="post" action="?controller=User&action=BuscarUsuario">
<svg class="bi bi-person-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg><br>
  <div class="form-group" align="center">
    <label for="exampleInputtext">User</label>
    <input class="sea2" type="text" class="form-control" name="usuario" id="exampleInputtext" aria-describedby="emailHelp">
  </div>
  <div class="form-group" align="center">
    <label for="exampleInputPassword1">Password</label>
    <input class="sea" type="password" class="form-control" name="contra" id="exampleInputPassword1">
  </div>
    <select class="form-control" name="tipo" id="exampleFormControlSelect1">
      <option>Administrador</option>
      <option>Trabajador</option>
      <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label><br></br>
     <button id="boton" type="submit" class="btn btn-primary">Entrar</button>
  </div>
</form>
<?php }
}
