<?php

class Usuarios
{
	public function Busqueda($Usuario, $Contra)
	{
		$conectar = new Conexion();
		$query = "SELECT * FROM 'usuarios' WHERE 'Usuario'='$Usuario' AND 'Contra'='$Contra';";
		$resultado = $conectar->query($query);
		return $resultado;
	}
}

?>