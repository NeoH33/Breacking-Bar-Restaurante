<?php

    require_once("views/MgestionarProducto/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="public/css/mainStyle.css">
	<title>Document</title> -->
</head>
<body style="font-family: Comic Sans;">
<div style="text-align: center">
        <h2>GESTIONAR POSTRES</h2>
    </div>
    <!--Barra Busqueda por nombre-->
    <!--Para mover un nav debemos desactivar el display: inline-block-->
      <div style="text-align: center">
        <nav class="navbar navbar-light bg-light" style="display: inline-block; list-style-type: none;">
        <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button type="button" class="btn btn-outline-primary">Buscar</button>
          </form>
          <!--Separamos dos etiquetas con p-->
          <p></p>
          <!--style="margin-left: 10px" separamos dos botones-->
          <a href="<?php echo constant('URL') ?>agregarProducto"><button type="button" style="margin-left: 20px" class="btn btn-outline-primary">Agregar</button></a>
          <p><p>
        </div>
        </nav>
      </div>
      <br>
  <div style="text-align: center">
  <!--Para centrar una tabla se utiliza  style="margin: 0 auto;-->
	<table class="table" class="table table-responsive" style="margin: 0 auto; width: 70%;">
		<tr>
			<th>NOMBRE</th>
			<th>PRECIO s/.</th>
			<th>IMAGEN</th>
			<th></th>
		</tr>
<?php
	foreach ($this->tabla as $fila) 
	{
?>

	<tr>
		<td><?php echo $fila["nombreP"]?></td>
		<td>S/ <?php echo $fila["precioP"]?>.00</td>
		<td><img width="150" height="150" src="<?php echo constant('URL')?>/img/<?php echo $fila["imagenP"] ?>" class="img-thumbnail"></td>
		<td><a style="color: blue" href="<?php echo constant('URL') ?>editarProducto?id=<?php echo $fila['codigoP']?>"><button class="btn btn-outline-success" type="submit">Editar</button></a></td>
		<td><a style="color:blue" href="<?php echo constant('URL') ?>eliminarProducto?id=<?php echo $fila['codigoP']?>"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
	</tr>

<?php
	}
?>
	</table>
	</div>
 
</body>
</html>