<?php

class registroUsuario extends Controlador
{
	
	function __construct()
	{
		
	}

	function mostrarVista()
	{

		$nombre = "registroUsuario/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
	function agregarUsuario()
	{

		$modelo = $this->cargarModelo("UsersCuentas");

		$modelo->foto=$_FILES['foto']['name'];;
		move_uploaded_file($_FILES['foto']['tmp_name'],'img/'.$_FILES['foto']['name']);

		$modelo->usuario = $_POST["usuario"];
		$modelo->email = $_POST["email"];
		$modelo->telefono = $_POST["telefono"];
		$modelo->pass = $_POST["pass"];
		$modelo->codigoTU = $_POST["codigoTU"];	

		$modelo->agregarUsu();

		header('Location:'.constant('URL').'login');

	}
}

?>