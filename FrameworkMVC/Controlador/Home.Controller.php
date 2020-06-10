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
        $smarty->display('default.tpl');
    }

    public function Servidor()
    {
     echo "En clase Home y metodo servidor";
	}

  }

 ?>
