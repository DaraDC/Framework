<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 05:40:04
  from 'C:\xampp\htdocs\DaraC\Framework\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f069194889b80_87248573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5658664500794492fba8dafbc763321517c10c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaraC\\Framework\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1594264511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Admin.tpl' => 1,
    'file:Trabajador.tpl' => 1,
    'file:inicio.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_5f069194889b80_87248573 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'Administrador') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:Admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } else { ?>
   <?php $_smarty_tpl->_subTemplateRender('file:Trabajador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
 <?php } else { ?>
 <?php $_smarty_tpl->_subTemplateRender('file:inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

   <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
