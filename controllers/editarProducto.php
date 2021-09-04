<?php
class editarProducto extends Controlador
{
	function __construct(){

	}
	function ActualizarProducto(){

		$modelo = $this->cargarModelo("Producto");

		$modelo->codigoP = $_POST["codigoP"];
		$modelo->nombreP = $_POST["nombreP"];
		$modelo->precioP = $_POST["precioP"];
		$modelo->descripcionP = $_POST["descripcionP"];
		$modelo->precioP = $_POST["ingredientesP"];

		//$modelo->imagenP=$_FILES['imagenP']['name'];;
		//move_uploaded_file($_FILES['imagenP']['tmp_name'],'../img/'.$_FILES['imagenP']['name']);

		$modelo->codigoCategoria = $_POST["codigoCategoria"];

		 $modelo->ActualizarProducto();
		
		header('Location:'.constant('URL').'admMenu');
	}
	function mostrarVista()
	{
		if (isset($_GET["id"])) {
			//Cargar el modelo
			$modelo = $this->cargarModelo("Producto");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->id = $_GET["id"];

			//Ejecutar el metodo de busqueda del MODELO
			$this->fila = $modelo->buscarById();
            
		    $this->tabla = $modelo->listarCategoria();
			//Enviar a la VISTA
            
		}
		else{
			$modelo = $this->cargarModelo("Producto");

			$modelo->codigoP = $_POST["codigoP"];
			$modelo->nombreP = $_POST["nombreP"];
			$modelo->precioP = $_POST["precioP"];
			
            //$modelo->imagenP=$_FILES['imagenP']['name'];;
		    //move_uploaded_file($_FILES['imagenP']['tmp_name'],'../img/'.$_FILES['imagenP']['name']);

		    $modelo->codigoCategoria = $_POST["codigoCategoria"];

			$modelo->ActualizarProducto();
			
			header('Location:'.constant('URL').'admMenu');
		}

		$nombre = "editarProducto/index";
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}
}
?>