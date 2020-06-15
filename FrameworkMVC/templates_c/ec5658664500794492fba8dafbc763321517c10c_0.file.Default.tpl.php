<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 21:19:12
  from 'C:\xampp\htdocs\DaraC\Framework\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7c9b04a95e1_46477158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5658664500794492fba8dafbc763321517c10c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DaraC\\Framework\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1592248749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_5ee7c9b04a95e1_46477158 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <h1 id="hola" align="center">Hello World</h1>

   <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
