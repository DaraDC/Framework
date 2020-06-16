<?php
  /**
   * Clase home que permite la primera carga del sistema
   */
  class Home
  {

    function __construct()
    {
      // code...
    }

    public function Inicio()
    {
        //echo "En clase Home y metodo inicio";
        $smarty = new Smarty();
        $smarty->display('Default.tpl');
    }

    public function Servidor()
    {
    $modelo = new Usuarios();
    $guardar = $modelo->Busqueda("usuario",123);
    var_dump($guardar);
    //echo "En clase Home y metodo servidor";
	}

  }

 ?>
