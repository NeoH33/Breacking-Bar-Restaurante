<?php 
    require_once("views\header.php");
    require_once("views\MenuUsuario\index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public\css\actualizarUsuario.css">
    <title>Document</title>
</head>
<body>
    <div class="cajaPrincipal">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="<?php echo constant('URL') ?>registroUsuario/agregarUsuario" method="post" enctype="multipart/form-data" data-ajax="false">
                    <div class="form-group mx-sm-4 pb-3">
                        
                        <div id="visualizar-portada">
                            <img src="<?php echo constant('URL')?>/img/<?php echo $_SESSION["imagenUS"] ?>" id="fPerfil" style="border-radius: 100%;" class="img-thumbnail" width="200" height="200">
                        </div>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="file" class="form-control" name="foto" id="btn_img" onchange="return validarIMG()" placeholder="Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <label >Usuario:</label>
                        <input type="text" class="form-control" name="usuario" value="<?php echo $_SESSION["usuarioUS"] ?>" required placeholder="Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <label for="">Gmail:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $_SESSION["emailUS"] ?>" required placeholder="Ingrese su Gmail">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <label for="">Telefono:</label>
                        <input type="text" class="form-control"  name="telefono" value="<?php echo $_SESSION["telefonoUS"] ?>" required placeholder="Ingrese telefono">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <label for="">Contraseña:</label>
                        <input type="password" class="form-control"  name="pass" required placeholder="Ingrese Contraseña">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" name="codigoTU" value="1" readonly style="display:none">
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-primary mb-3" value="Actualizar" href="<?php echo constant('URL') ?>registroDireccion?email=name='email'">
                    </div>
                    <div class="form-group text-center">
                        <span><a href="<?php echo constant('URL') ?>login" class="olvide1">INICIAR SESIÓN</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>