<?php require_once('views\administrador\index.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center">
        <h2>GESTIONAR USUARIOS</h2>
    </div>
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
          <a href="<?php echo constant('URL') ?>agregarUsuarioAdmin"><button type="button" style="margin-left: 20px" class="btn btn-outline-primary">Agregar</button></a>
          <p><p>
        </div>
      <br>
    </div>
  <div style="text-align: center">
  <!--Para centrar una tabla se utiliza  style="margin: 0 auto;-->
	<table class="table table-responsive" style="margin: 0 auto; width: 70%;" >
		<tr>
            <th>CODIGO</th>
			<th>FOTO</th>
			<th>USUARIO</th>
			<th>EMAIL</th>
			<th>TELEFONO</th>
		</tr>
<?php
	foreach ($this->tabla as $fila) 
	{
?>

	<tr>
        <td><?php echo $fila["codigoUS"] ?></td>
        <td><img width="50" height="50" src="<?php echo constant('URL')?>/img/<?php echo $fila["imagenUS"] ?>" class="img-thumbnail"></td>
		<td><?php echo $fila["usuarioUS"]?></td>
		<td><?php echo $fila["emailUS"]?></td>
        <td><?php echo $fila["telefonoUS"]?></td>
		<td><a style="color:blue" href="<?php echo constant('URL') ?>editarUsuario?id=<?php echo $fila['codigoUS']?>"><button class="btn btn-outline-success" type="submit">Editar</button></a></td>
		<td><a style="color:blue" href="<?php echo constant('URL') ?>eliminarUsuario?id=<?php echo $fila['codigoUS']?>"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
	</tr>

<?php
	}
?>
	</table>
</div>
</body>
</html>