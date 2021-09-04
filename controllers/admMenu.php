<?php 
class admMenu extends Controlador
{
	function __construct()
	{

	}
	function mostrarVista()
	{
        
        //Cargar el Modelo
		$modelo = $this->cargarModelo("Producto");

		//Ejecutar el metodo listarTodos del modelo
		//guardar la tabla en una propiedad
        $this->tabla = $modelo->listarMenu();


        //-------------------------------------
		$nombre = "admMenu/index";
		//Codigo para mostrar la vista
		//Generar el nombre de la vista
		$fileName = "views/" . $nombre. ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}
	

}