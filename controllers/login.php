<?php

class login extends Controlador
{
	
	function __construct()
	{
	
	}

	function mostrarVista()
	{
		
		$nombre = "login/index";
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);

	}

	function validar(){

		$model = $this->cargarModelo('UsersCuentas');
		
		$model->email = $_POST['email'];
		$model->pass = $_POST['pass'];

		$this->fila = $model->login();

		if ($this->fila>0)  
		{
			$fila = $this->fila;

			if($fila['codigoTipoUsuario']==2){

				session_start();
				
				$_SESSION['codigoUS']=$fila['codigoUS'];
				$_SESSION['imagenUS']=$fila['imagenUS'];
				$_SESSION['usuarioUS']=$fila['usuarioUS'];
				$_SESSION['emailUS']=$fila['emailUS'];
				$_SESSION['telefonoUS']=$fila['telefonoUS'];
				$_SESSION['passUS']=$fila['passUS'];
				$_SESSION['codigoTipoUsuario']=$fila['codigoTipoUsuario'];

				header('Location:'.constant('URL').'admMenu');	

			}else{
				session_start();
				$_SESSION['codigoUS']=$fila['codigoUS'];
				$_SESSION['imagenUS']=$fila['imagenUS'];
				$_SESSION['usuarioUS']=$fila['usuarioUS'];
				$_SESSION['emailUS']=$fila['emailUS'];
				$_SESSION['telefonoUS']=$fila['telefonoUS'];
				$_SESSION['passUS']=$fila['passUS'];
				$_SESSION['codigoTipoUsuario']=$fila['codigoTipoUsuario'];
				
				header('Location:'.constant('URL').'main');	
			}
			
		}
        else{
			
			header('Location:'.constant('URL').'login');
			

		}

	}
	function cerrarSesion(){
		
		session_start();
		session_destroy();
	
		header('Location:'.constant('URL').'main');

	}

}

?>