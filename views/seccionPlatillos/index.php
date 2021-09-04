<?php
    require_once("views/header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<?php
	//session_start();
	if (isset($_SESSION['usuarioUS'])) 
	{
		?>
		<script type="text/javascript">
		$(document).ready(function(){		
     		document.getElementById("btnagregarP").type = "submit";

		});				
		
		</script>
		<?php
	}
?>
<div class="peliculas-recomendadas contenedor">
	<div class="contenedor-titulo-controles" id="parraf">
			<BR>
			<h3 style="color:white">Menú del dia</h3>
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

					<img src="<?php echo constant('URL')?>/img/<?php echo $fila["imagenP"] ?>" class="img-thumbnail" style="cursor:pointer">
					<p id="descripcion"><?php echo $fila['nombreP'] ?></p><p id="descripcion">S/ <?php echo $fila['precioP'] ?>.00</p>

					<form action="<?php echo constant('URL') ?>carrito/agregarCarrito" method="POST">

						<input type="text" name="CDimagen" style="display:none" value="<?php echo $fila["imagenP"] ?>">
						<input type="text" name ="CDnombre" style="display:none" value="<?php echo $fila["nombreP"] ?>">

						<div align="center">
							<div class="def-number-input number-input safari_only">
								<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
								<input class="quantity" min="0" name="CDcantidad" value="1" type="number">
								<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
							</div>
						</div>
						<input type="text" style="display:none" name="CDprecio" value="<?php echo $fila["precioP"] ?>">
						
						<br>
						<div align="center">
							<button type="button" class="btn btn-outline-warning" id="btnagregarP" data-bs-toggle="modal" data-bs-target="#nombre<?php echo $fila["codigoP"]?>" >Detalles</button>

							<input type="submit" class="btn btn-primary"  id="btnagregarP" value="Agregar" name="">
						</div>
					</form>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="nombre<?php echo $fila["codigoP"]?>" tabindex="-1" aria-labelledby="nombre<?php echo $fila["codigoP"]?>Label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="nombre<?php echo $fila["codigoP"]?>Label"><?php echo $fila["nombreP"] ?></h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<div class="modal-body" align="center">
						<img src="<?php echo constant('URL')?>/img/<?php echo $fila["imagenP"] ?>" width="50%" class="img-thumbnail" >
						<br><br>
						<h4>Descripcion</h4>
						<div style="width: 65%;">
							<p><?php echo $fila["descripcionP"]?></p>
							<h4>Ingredientes</h4>
							<p><?php echo $fila["ingredientesP"] ?></p>
						</div>
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
						<button type="button" class="btn btn-primary">Agregar</button>
					</div>
					</div>
				</div>
				</div>							
<?php
	}
?>
				
			</div>		
		<div>
			<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
		</div>
		
</div>
</div>
<?php 

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="public/js/main.js"></script>
</body>
</html>