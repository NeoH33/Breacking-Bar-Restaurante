<?php

class eliminarUsuario extends Controlador
{
	
	function __construct()
	{
		
	}

	function mostrarVista()
	{
		echo "<h1>Eliminando...</h1>";

		//Cargar el modelo
		$modelo = $this->cargarModelo("UsersCuentas");

		//Asignar el valor del ID enviado por el metodo GET
		//eliminar?id=2
		$modelo->id = $_GET["id"];

		//Ejecutar la eliminacion
		$modelo->eliminarUsuario();

		//Redireccionar
		//header("refresh:1; url=" . constant("URL") . "admMenu"); Refrescar menu con timpo y mensaje de cofirmacion
		header('Location:'.constant('URL').'MgestionarUsuarios');
	}

}

?>