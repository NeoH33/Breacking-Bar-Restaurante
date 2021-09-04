<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/mainStyle.css">

    <title>Seccion de Administrador</title>
  </head>
  <body aling="center">
      <!-- BARRA BREACKING BAR -->

      <nav class="navbar navbar-expand-lg header-nav bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Breacking Bar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo constant('URL') ?>admMenu">PRODUCTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL') ?>MgestionarUsuarios">PERSONAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#postres">RESERVACIONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DELIVERY</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
           <a href="#"><img src="img\fooddome_117763.ico" alt="Icon pedidos" width="70" height="70"></a>
          </ul>
          <ul class="navbar-nav ms-auto">
           <a href="#"><img id="fperfil" src="<?php echo constant('URL')?>/img/<?php echo $_SESSION["imagenUS"] ?>" style="margin-top:25px;border-radius: 100px;" alt="Icon Usuario" width="63" height="63"><p id="NomUsuario" style="text-align: center;font-family: font-family: Georgia;"><?php echo $_SESSION["usuarioUS"] ?></p></a>
          </ul>
          <ul class="navbar-nav ms-auto">
            <a href="<?php echo constant('URL') ?>login/cerrarSesion"><button class="btn" id="btnIS" style="border-radius: 17px;">Cerrar Sesion</button></a>
          </ul>
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>