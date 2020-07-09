<?php

class Usuarios
{
	public function BuscarUsuario($usuario, $contra, $tipo)
	{
		$conectar = new Conexion();
		$query = "SELECT * FROM 'usuarios' WHERE 'usuario'='$usuario' AND 'contra'='$contra' AND 'tipo' = '$tipo';";
		$resultado = $conectar->query($query);
		$conectar->close();
		return $resultado;
	}
}

?>