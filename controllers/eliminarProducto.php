<?php

class eliminarProducto extends Controlador
{
	
	function __construct()
	{
		
	}

	function mostrarVista()
	{
		echo "<h1>Eliminando...</h1>";

		//Cargar el modelo
		$modelo = $this->cargarModelo("Producto");

		//Asignar el valor del ID enviado por el metodo GET
		//eliminar?id=2
		$modelo->id = $_GET["id"];

		//Ejecutar la eliminacion
		$modelo->eliminarProducto();

		//Redireccionar
		//header("refresh:1; url=" . constant("URL") . "admMenu"); Refrescar menu con timpo y mensaje de cofirmacion
		header('Location:'.constant('URL').'admMenu');
	}

}

?>