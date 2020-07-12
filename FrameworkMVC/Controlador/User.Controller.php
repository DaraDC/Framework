<?php

class User
{

   public function BuscarUsuario()
   {
       session_start();
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
         $_SESSION['usuario']=$row['usuario'];
         $_SESSION['tipo']=$row['tipo'];

         $smarty->assign('usuario',$_SESSION['usuario']);
         $smarty->assign('tipo',$_SESSION['tipo']);
         $smarty->display('Default.tpl');

        }

	   }
       else
      {
        $smarty->display('Default.tpl');
      }
   }
}

?>