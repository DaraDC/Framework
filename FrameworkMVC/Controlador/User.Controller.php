<?php

class User
{

   public function BuscarUsuario()
   {
       $us=new Usuarios();
       $smarty=new Smarty();

       $usuario=$_POST['usuario'];
       $contra=$_POST['contra'];
       $puesto=$_POST['puesto'];

       $usuarios=$us->BuscarUsuario($usuario,$contra,$puesto);

       if($usuarios->num_rows==1)
       {
        $ar=array();

        while($row=mysqli_fetch_assoc($usuarios))
        {
           if($row['tipo'] == 'Administrador')
           {
           $smarty->display('Administrador.tpl');
		   }
           else if($row['tipo'] == 'Trabajador')
           {
           $smarty->display('Trabajador.tpl');
		   }
        }
	   }
   }
}

?>