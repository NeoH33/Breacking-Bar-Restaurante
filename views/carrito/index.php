<?php

session_start();

// if(isset($_SESSION["carrito"])){

// 	foreach($_SESSION["carrito"] as $indice =>$arreglo){
// 		echo "Producto: ". $indice . "<br>";
// 		foreach($array as $key =>$value){
// 			echo $key .": " . $value;

// 		}
// 	}
	


// }else{
// 	echo "<script>alert('el carrito esta vacio');</script>";
// ?>

// <?php
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Modal -->
		<div class="modal fade" id="carrito" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> 
				<div class="modal-dialog">
				<div class="modal-content" style="width: 600px;">
					<div class="modal-header">
					<h3 class="modal-title" id="staticBackdropLabel"><img src="img\bolsas.png" alt="Icon pedidos" width="50px" height="50px"> Pedidos</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
					</div>
					<div class="modal-body" align="center">
					<?php 
					if(isset($_SESSION["producto"])){
					?>
					<table class="table" class="table table-responsive" style="margin: 0 auto; width: 85%;" >
						<tr>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Cantidad</th>
							<th>PRECIO s/.</th>
							
						</tr>
						<?php
							$precioT = 0;
							$total = 0;
							$PrecioTotal = 0;
							
							foreach($_SESSION['producto'] as $indice =>$array){
								?>
									<tr>
										<td><img width="110" height="110" src="<?php echo constant('URL')?>/img/<?php echo $array["CDimagen"] ?>" class="img-thumbnail" ></td>
										<td><?php echo $array["CDnombre"] ?></td>
										<td>
											<div class="def-number-input number-input safari_only">
												<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
												<input class="quantity" min="0" name="CDcantidad" value="<?php echo $array["CDcantidad"] ?>" type="number">
												<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
											</div>
										</td>
										<!--Realizamos el calculo-->
										<?php $precioT = $array["CDcantidad"] * $array["CDprecio"] ?>

										<td>S/.<?php echo $precioT ?>.00</td>

										<?php $PrecioTotal = $total += $precioT ?>
										<td>
										<button style="text-decoration: none; background-color: Transparent; border: none;"><img src="img\eliminar.png" alt="Icon pedidos" width="35" height="35"></button>

										</td>
									</tr>
								<?php
							}
							?>
									<tr>
										<td></td>
										<td></td>
										<td><LAbel><b>TOTAL</b></LAbel></td>
										<td><b>S/.<?php echo $PrecioTotal ?>.00</b></td>
									</tr>
						</table>
					<?php
					}else{
						?>
							<label style="size: 25px;">El carrito esta vacio</label>

						<?php
					}
					?>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<a href = "<?php echo constant('URL') ?>login/cerrarSesion"><button type="button" class="btn btn-primary" href = "<?php echo constant('URL') ?>login/cerrarSesion">Realizar Compra</button>
					</div>
				</div>
				</div>
				</div>
</body>
</html>