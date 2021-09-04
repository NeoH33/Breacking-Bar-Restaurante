<?php 
class carrito extends Controlador
{
    function __construct()
	{

	}
	function mostrarVista()
	{
		// //Cargar el Modelo
		// $modelo = $this->cargarModelo("Producto");

		// //Ejecutar el metodo listarTodos del modelo
		// //guardar la tabla en una propiedad
        // $this->tabla = $modelo->listarmisproductos();
		
        //-------------------------------------
		$nombre = "carrito/index";
		//Codigo para mostrar la vista
		//Generar el nombre de la vista
		$fileName = "views/" . $nombre. ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}
	function agregarCarrito(){

		session_start();
		////Recibo las variables del formulario
		$CDimagen = $_POST["CDimagen"];
		$CDnombre = $_POST["CDnombre"];
		$CDcantidad = $_POST["CDcantidad"];
		$CDprecio = $_POST["CDprecio"];

		//Asigno los datos al campo en la variable de sesión
		$_SESSION['producto'][]=array ("CDimagen"=>$CDimagen,"CDnombre"=>$CDnombre,"CDcantidad"=>$CDcantidad,"CDprecio"=>$CDprecio);


		// $_SESSION["carrito"]["producto"]["imagen"] = $_POST["CDimagen"];
		// $_SESSION["carrito"]["producto"]["nombre"] = $_POST["CDnombre"];
		// $_SESSION["carrito"]["producto"]["cantidad"] = $_POST["CDcantidad"];
		// $_SESSION["carrito"]["producto"]["precio"] = $_POST["CDprecio"];

		header('Location:'.constant('URL').'seccionPlatillos');
	}
    
}


?>