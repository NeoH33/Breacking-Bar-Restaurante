<?php 
class agregarProducto extends Controlador
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

		$this->tabla = $modelo->listarCategoria();


        //-------------------------------------
		$nombre = "agregarProducto/index";
		//Codigo para mostrar la vista
		//Generar el nombre de la vista
		$fileName = "views/" . $nombre. ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}
	function agregar(){
		
		$modelo = $this->cargarModelo("Producto");

        $modelo->nombreP = $_POST["nombreP"];
        $modelo->precioP = $_POST["precioP"];

		$modelo->imagenP=$_FILES['imagenP']['name'];;
		move_uploaded_file($_FILES['imagenP']['tmp_name'],'img/'.$_FILES['imagenP']['name']);
		$modelo->descripcionP = $_POST["descripcionP"];
		$modelo->ingredientesP = $_POST["ingredientesP"];
		
        $modelo->codigoCategoria =$_POST["codigoCategoria"];

		$modelo->agregar();

		header('Location:'.constant('URL').'agregarProducto');

	}

}


?>