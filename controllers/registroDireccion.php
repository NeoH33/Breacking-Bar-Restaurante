<?php

class registroDireccion extends Controlador
{
	
	function __construct()
	{
	
	}

	function mostrarVista()
	{
		
		if (isset($_GET["email"])) {
			//Cargar el modelo
			$modelo = $this->cargarModelo("UsersCuentas");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->email = $_GET["email"];
			//Ejecutar el metodo de busqueda del MODELO
			$this->fila = $modelo->buscarEmail();
				//Enviar a la VISTA				
		} 

		//Iniciar una propiedad

		//Cargar el Modelo
		$modelo = $this->cargarModelo("usersCuentas");

		//Ejecutar el metodo listarTodos del modelo
		//guardar la tabla en una propiedad

		$this->tabla = $modelo->listarDistrito();

		//No podemos listar dos tablas en un mismo archivo
		//$this->tabla = $modelo->listarUsuario();
		
		//--------------------------------------------

		$nombre = "registroDireccion/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
	function agregarDireccion()
	{

		$modelo = $this->cargarModelo("UsersCuentas");

		$modelo->calle = $_POST["calle"];
		$modelo->numero = $_POST["numero"];
		$modelo->referencia = $_POST["referencia"];
		$modelo->codigoDistrito = $_POST["codigoDistrito"];
		$modelo->codigoUsuario = $_POST["codigoUsuario"];


		$modelo->agregarDirec();

		header('Location:'.constant('URL').'login');

	}
}

?>