<?php 
class MgestionarUsuarios extends Controlador
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
        $this->tabla = $modelo->listarUsuario();
        //-------------------------------------
		$nombre = "MgestionarUsuarios/index";
		//Codigo para mostrar la vista
		//Generar el nombre de la vista
		$fileName = "views/" . $nombre. ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}
    function buscarUsuarios(){
        
        $modelo = $this->cargarModelo("UsersCuentas");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->codigoTU = $_POST["codigoTU"];

			//Ejecutar el metodo de busqueda del MODELO
			$this->tabla = $modelo->buscarTipoUsuario();

		header('Location:'.constant('URL').'MgestionarUsuarios');

    }
	

}

