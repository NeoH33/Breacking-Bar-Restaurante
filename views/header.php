<?php 
  require_once("views/carrito/index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/mainStyle.css">
  <link rel="stylesheet" href="public/css/Selectcantidad.css">

  <title>Breacking Bar</title>
</head>
<body class="home">
<?php
	session_start();
	if (isset($_SESSION['usuarioUS'])) 
	{
		?>
		<script type="text/javascript">
		$(document).ready(function(){		
			document.getElementById("fperfil").src = "<?php echo constant('URL')?>/img/<?php echo $_SESSION["imagenUS"] ?>";
			document.getElementById("NomUsuario").innerHTML="<?php echo $_SESSION["usuarioUS"] ?>";
      document.getElementById("btnIS").innerHTML = "Cerrar";
      document.getElementById("editarPerfil").href = "<?php echo constant('URL') ?>editarPerfil";
      document.getElementById("ingresarSalir").href = "<?php echo constant('URL') ?>login/cerrarSesion";
      document.getElementById("btnagregarP").type = "submit";

		});				
		
		</script>
		<?php
	}
?>
    <header class="header">
      <nav class="navbar navbar-expand-lg header-nav fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo constant('URL') ?>main">Breacking Bar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL') ?>seccionPlatillos">PLATILLOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL') ?>seccionBebidas">BEBIDAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL') ?>seccionPostres">POSTRES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">RESERVACIONES</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
          <button style="text-decoration: none; background-color: Transparent; border: none;" data-bs-toggle="modal" data-bs-target="#carrito"><img src="img\fooddome_117763.ico" alt="Icon pedidos" width="70" height="70"></button>
          </ul>
          <ul class="navbar-nav ms-auto">
           <a id="editarPerfil" href="#"><img id="fperfil" src="img\perildefecto.png" style="margin-top:25px;border-radius: 100px;" alt="Icon Usuario" width="63" height="63"><p id="NomUsuario" style="text-align: center;font-family: font-family: Georgia;">usuario</p></a>
          </ul>
          <ul class="navbar-nav ms-auto">
            <a id="ingresarSalir" href="<?php echo constant('URL') ?>login"><button class="btn" id="btnIS" style="border-radius: 17px;">INGRESAR</button></a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</body>
</html>