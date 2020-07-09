<?php

class User
{

   public function BuscarUsuario()
   {
       $us=new Usuarios();
       $smarty=new Smarty();

       $usuario=$_POST['usuario'];
       $contra=$_POST['contra'];
       $tipo=$_POST['tipo'];

       $datos=$us->BuscarUsuario($usuario,$contra,$tipo);

       if($datos->num_rows==1)
       {
        
        $ar=array();

        while($row=mysqli_fetch_assoc($datos))
        {
          $smarty->display('Admin.tpl');
        }

	   }
       else
      {
        $smarty->display('Default.tpl');
      }
   }
}

?>