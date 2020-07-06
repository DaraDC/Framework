<?php

class Usuarios
{
	public function BuscarUsuario($usuario, $contra, $puesto)
	{
		$conectar = new Conexion();
		$query = "SELECT * FROM 'usuarios' WHERE 'usuario'='$usuario' AND 'contra'='$contra' AND 'puesto' = '$puesto';";
		$resultado = $conectar->query($query);
		$conectar->close();
		return $resultado;
	}
}

?>