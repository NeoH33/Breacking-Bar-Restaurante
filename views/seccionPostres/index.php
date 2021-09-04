<?php
    require_once("views/header.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Document</title>

	<style type="text/css">
		body{
			font-family: Comic Sans;
			background-color:#141414;/*#30475e; #012a4a; #0b3954; #1b263b */

		}
		#parraf{
			align: center;

		}
		#indicador{
			align: center;
		}
		#descripcion{
			text-align:center;
			color: #ffffff;

		}
		#info{
			background-color: #012a4a;
		}
		#btnagregarP{
			border: none;
			outLine: none;
			background-color: #dc2f02;
		}
	
	</style>
</head>
<body>
<div class="peliculas-recomendadas contenedor">
	<div class="contenedor-titulo-controles" id="parraf">
			<BR>
			<h3>Menú del dia</h3>
			<div class="indicadores">
			</div>
	</div>

	<div class="contenedor-principal">
		<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
		<div class="contenedor-carousel">
			<div class="carousel">
<?php
	foreach ($this->tabla as $fila) 
	{
?>			
				<div class="pelicula" id="info">
				<a href="#"><img src="<?php echo constant('URL')?>/img/<?php echo $fila["imagenP"] ?>" class="img-thumbnail" >
				<p id="descripcion"><?php echo $fila['nombreP'] ?></p><p id="descripcion">S/ <?php echo $fila['precioP'] ?>.00</p><div align="center"><button class="btn btn-primary" id="btnagregarP">Agregar</button></div></a>
				</div>
<?php
	}
?>
			</div>		
		<div>
			<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
		</div>
</div>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="public/js/main.js"></script>
</body>
</html>