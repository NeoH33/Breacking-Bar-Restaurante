<?php
require_once("class/basedatos.php");

class Producto
{
	//PROPIEDADES TABLA TEMPORAL CARRITODETALLE
	var $CDimagen;
	var $CDnombre;
	var $CDcantidad;
	var $CDprecio;

	//Buscar detalle del producot
	var $idPD;
	//Propiedades (atributos
	var $id;//PROPIEDAD PARA BUSQUEDA

	var $codigoP;
    var $nombreP;
    var $precioP;
    var $imagenP;
	var $descripcionP;
	var $ingredientesP;
    var $codigoCategoria;

	//PROPIEDADES PARA ACTUALIZAR DATOS DEL USUARIO
	//Metodos

	function __construct()
	{
		
	}
    function agregar()
	{
		$bd = new BaseDatos();

		$cnx = $bd->conectar();
		$stmt = $cnx->prepare("insert into producto(nombreP,precioP,imagenP,descripcionP,ingredientesP,codigoCategoria) values(:nombreP,:precioP,'".$this->imagenP."',:descripcionP,:ingredientesP,:codigoCategoria)");
		$stmt->bindValue(":nombreP",$this->nombreP);
		$stmt->bindValue(":precioP",$this->precioP);
		$stmt->bindValue(":descripcionP",$this->descripcionP);
		$stmt->bindValue(":ingredientesP",$this->ingredientesP);
		$stmt->bindValue(":codigoCategoria",$this->codigoCategoria);

		$stmt->execute();

	}
	function agregarCarrito()
	{
		$bd = new BaseDatos();

		$cnx = $bd->conectar();
		$stmt = $cnx->prepare("insert into CarritoPrueba values(:CDimagen,:CDnombre,:CDcantidad,:CDprecio)");
		$stmt->bindValue(":CDimagen",$this->CDimagen);
		$stmt->bindValue(":CDnombre",$this->CDnombre);
		$stmt->bindValue(":CDcantidad",$this->CDcantidad);
		$stmt->bindValue(":CDprecio",$this->CDprecio);

		$stmt->execute();

	}
	function listarmisproductos() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from CarritoPrueba");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
    function listarCategoria() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from categoria");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
	function listarMenu() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from producto where codigoCategoria=2");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}

	function listarPlatosCarta() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from producto where codigoCategoria=3");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
	function listarBebidas() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from producto where codigoCategoria=4");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
	function listarPostres() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from producto where codigoCategoria=5");

		///Ejecutar la sentencia
		$stmt->execute();

		// Recuperar las filas
		$tabla = $stmt->fetchall();

		//Devolver la Tabla
		return $tabla;

	}
	function buscarById() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from producto where codigoP=:id");

		//Enviar el parametro
		$stmt->bindValue(":id",$this->id);

		//Ejecutar la sentencia
		$stmt->execute();

		//Recuperar las filas
		$fila = $stmt->fetch();

		//Devolver la TABLA
		return $fila;

	}
	function BuscarProdDetalle() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from producto where codigoP=:idPD");

		//Enviar el parametro
		$stmt->bindValue(":idPD",$this->idPD);

		//Ejecutar la sentencia
		$stmt->execute();

		//Recuperar las filas
		$fila = $stmt->fetch();

		//Devolver la TABLA
		return $fila;

	}
	function ActualizarProducto(){

		$bd = new BaseDatos();

		$cnx = $bd->conectar();

		$stmt = $cnx->prepare("update producto set nombreP=:nombreP, precioP=:precioP, descripcionP=:descripcionP, ingredientesP=:ingredientesP codigoCategoria=:codigoCategoria where codigoP=:codigoP");
		$stmt->bindValue(":nombreP", $this->nombreP);
		$stmt->bindValue(":precioP", $this->precioP);
		$stmt->bindValue(":codigoCategoria",$this->codigoCategoria);
		$stmt->bindValue(":codigoP", $this->codigoP);

		$stmt->execute();
	}
	function eliminarProducto()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();
		//codigoP es una propiedad de nuestra tabla producto de la BD el id es nuestra variable donde trasportamos 
		//el valor selecionado con el metodo get (editarProducto?id=)
		$stmt = $cnx->prepare("delete from producto where codigoP=:id");

		$stmt->bindValue(":id",$this->id);

		$stmt->execute();
	}

}

?>