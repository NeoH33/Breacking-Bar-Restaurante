<?php
require_once("class/basedatos.php");

class UsersCuentas
{
	//Variable buscar usuarios
	var $idTipoUsuario;

	//Propiedades (atributos
	var $foto;
	var $usuario;
	var $email;
	var $telefono;
	var $pass;
	var $codigoTU;

	//Propiedades para agregar Direccion
	var $calle;
	var $numero;
	var $referencia;
	var $codigoDistrito;
	var $codigoUsuario;
	//PROPIEDADES PARA ACTUALIZAR DATOS DEL USUARIO
	//Metodos

	function __construct()
	{
		
	}

	function login(){
		
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("select * from usuario where emailUS=:email and passUS=:pass");

		$stmt->bindValue(":email",$this->email);
		$stmt->bindValue(":pass",$this->pass);

		$stmt->execute();

		$fila = $stmt->fetch();
		return $fila;

	}
	function agregarUsu()
	{
		$bd =  new BaseDatos();
	
		$cnx =$bd->conectar();
    //Recordar que la sintaxis de MYSQL es diferente que SQL SERVER :descripcion:categoria
		//$stmt = $cnx->prepare("insert into usuario (u_nombre,u_apellido,u_email,u_telefono,u_contraseña,id_tipousuario) values(:u_nombre,:u_apellido,:u_email,:u_telefono,:u_contraseña,:id_tipousuario)");
		$stmt = $cnx->prepare("insert into usuario (imagenUS,usuarioUS,emailUS,telefonoUS,passUS,codigoTipoUsuario) values('".$this->foto."',:usuario,:email,:telefono,:pass,:codigoTU)");
		$stmt->bindValue(":usuario",$this->usuario);
		$stmt->bindValue(":email",$this->email); 
		$stmt->bindValue(":telefono",$this->telefono);
		$stmt->bindValue(":pass",$this->pass);
		$stmt->bindValue(":codigoTU",$this->codigoTU);

		$stmt->execute();
	}
	function agregarDirec()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("insert into direccion (calle,numero,referencia,codigoDistrito,codigoUsuario) values(:calle,:numero,:referencia,:codigoDistrito,:codigoUsuario");

		$stmt->bindValue(":calle",$this->calle);
		$stmt->bindValue(":numero",$this->numero);
		$stmt->bindValue(":referencia",$this->referencia);
		$stmt->bindValue(":codigoDistrito",$this->codigoDistrito);
		$stmt->bindValue(":codigoUsuario",$this->codigoUsuario);


		$stmt->execute();
	}
	function listarDistrito(){
		//Instanciar la Clase Base de Datos
		$bd = new BaseDatos();

		//Ejecutar el meto Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from distrito");

		//Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;
	}
	function listarUsuario() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from usuario");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
	function buscarTipoUsuario() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from usuario where codigoTipoUsuario=:1");

		//Enviar el parametro
		$stmt->bindValue(":codigoTU",$this->codigoTU);

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

		console.log($tabla);

	}

	function buscarById() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from usuario where codigoUS=:id");

		//Enviar el parametro
		$stmt->bindValue(":id",$this->id);

		//Ejecutar la sentencia
		$stmt->execute();

		//Recuperar las filas
		$fila = $stmt->fetch();

		//Devolver la TABLA
		return $fila;

	}

	function ActualizarUsuario(){

		$bd = new BaseDatos();

		$cnx = $bd->conectar();

		$stmt = $cnx->prepare("update usuario set usuarioUS=:usuario, emailUS=:email, telefonoUS=:telefono, passUS=:pass where codigoUS=:id");
		$stmt->bindValue(":usuario", $this->usuario);
		$stmt->bindValue(":email", $this->email);
		$stmt->bindValue(":telefono",$this->telefono);
		$stmt->bindValue(":pass",$this->pass);
		$stmt->bindValue(":id", $this->id);

		$stmt->execute();
	}

	function eliminarUsuario()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();
		//codigoP es una propiedad de nuestra tabla producto de la BD el id es nuestra variable donde trasportamos 
		//el valor selecionado con el metodo get (editarProducto?id=)
		$stmt = $cnx->prepare("delete from usuario where codigoUS=:id");

		$stmt->bindValue(":id",$this->id);

		$stmt->execute();
	}

	function listarTipoUsuario() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from tipoUsuario where codigoTU!=1;");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
	

}

?>