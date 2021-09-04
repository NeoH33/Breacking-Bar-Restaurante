<?php 
class agregarUsuarioAdmin extends Controlador
{
	function __construct()
	{

	}
	function mostrarVista()
	{
        
        //Cargar el Modelo
		$modelo = $this->cargarModelo("UsersCuentas");

		//Ejecutar el metodo listarTodos del modelo
		//guardar la tabla en una propiedad

		$this->tabla = $modelo->listarTipoUsuario();


        //-------------------------------------
		$nombre = "agregarUsuarioAdmin/index";
		//Codigo para mostrar la vista
		//Generar el nombre de la vista
		$fileName = "views/" . $nombre. ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}

	function agregarUsuarioAdmin()
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

		header('Location:'.constant('URL').'agregarUsuarioAdmin');
	}

}


?>