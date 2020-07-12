<?php

class Operaciones
{
	function __construct()
	{
	
	}

	public function AbrirCrearUsuario()
	{
	     $smarty=new Smarty();
	     session_start();

		 $smarty->assign('ventana', 'vcu');
	     $smarty->assign('usuario',$_SESSION['usuario']);
         $smarty->assign('tipo',$_SESSION['tipo']);
         $smarty->display('Default.tpl');
	}
}

?>