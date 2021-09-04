<?php
class editarUsuario extends Controlador
{
	function __construct(){

	}
	function ActualizarUsuario(){

		$modelo = $this->cargarModelo("UsersCuentas");

		$modelo->id = $_POST["id"];
		$modelo->usuario = $_POST["usuario"];
		$modelo->email = $_POST["email"];
		$modelo->telefono = $_POST["telefono"];
		$modelo->pass = $_POST["pass"];

		//$modelo->imagenP=$_FILES['imagenP']['name'];;
		//move_uploaded_file($_FILES['imagenP']['tmp_name'],'../img/'.$_FILES['imagenP']['name']);

		//$modelo->codigoTipoUsuario = $_POST["codigoTU"];

		$modelo->ActualizarUsuario();
		
		

		header('Location:'.constant('URL').'MgestionarUsuarios');
		
	}
	function mostrarVista()
	{
		if (isset($_GET["id"])) {
			//Cargar el modelo
			$modelo = $this->cargarModelo("UsersCuentas");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->id = $_GET["id"];

			//Ejecutar el metodo de busqueda del MODELO
			$this->fila = $modelo->buscarById();
            
		    $this->tabla = $modelo->listarTipoUsuario();
			//Enviar a la VISTA
            
		}
		else{
			$modelo = $this->cargarModelo("UsersCuentas");

			$modelo->id = $_POST["id"];
		    $modelo->usuario = $_POST["usuario"];
            $modelo->email = $_POST["email"];
            $modelo->telefono = $_POST["telefono"];
            $modelo->pass = $_POST["pass"];
			
            //$modelo->imagenP=$_FILES['imagenP']['name'];;
		    //move_uploaded_file($_FILES['imagenP']['tmp_name'],'../img/'.$_FILES['imagenP']['name']);

		    //$modelo->codigoTipoUsuario = $_POST["codigoTU"];

			$modelo->ActualizarUsuario();
			
			header('Location:'.constant('URL').'MgestionarUsuarios');
		}
		
		$nombre = "editarUsuario/index";
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}
}
?>