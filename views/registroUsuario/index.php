<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public\css\regUsuStyle.css">
    <script type="text/javascript">

		function validarIMG()
		{
			var btn_img = document.getElementById('btn_img');
			var archivoRuta = btn_img.value;
			var extPermitidas = /(.PNG|JPEG|.JPG|.tiff|.tif)$/i;

			if(!extPermitidas.exec(archivoRuta))
			{
				alert('Asegurate de haber seleccionado una imagen PNG, JPEG,JPG,tiff o tiff');
				btn_img.value='';
				return false;
			}
			else
			{
				if(btn_img.files && btn_img.files[0])
				{
					var visor = new FileReader();
					visor.onload=function(e)
					{
						document.getElementById('visualizar-portada').innerHTML=
						'<embed src="'+e.target.result+'" width="300" height="300" style="border-radius: 100%;" >';
					};
					visor.readAsDataURL(btn_img.files[0]);
				}
			}

		}
    </script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="<?php echo constant('URL') ?>registroUsuario/agregarUsuario" method="post" enctype="multipart/form-data" data-ajax="false">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-dark">REGISTRO USUARIO</h1>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        
                        <div id="visualizar-portada">
                            <img src="img\Perfil2.jpg" style="border-radius: 100%;" class="img-thumbnail" width="300" height="300">
                        </div>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="file" class="form-control" name="foto" id="btn_img" onchange="return validarIMG()" placeholder="Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control" name="usuario" required placeholder="Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control" name="telefono" required placeholder="Ingrese su Telfono">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="email" class="form-control"  name="email" required placeholder="Ingrese un Email">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control"  name="pass" required placeholder="Ingrese una Contraseña">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" name="codigoTU" value="1" readonly style="display:none">
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-block ingresar" value="REGISTRAR" href="<?php echo constant('URL') ?>registroDireccion?email=name='email'">
                    </div>
                    <div class="form-group mx-sm-4 text-center">
                        <a class="olvide"><p style="color: #ff5200;text-size: 50px;">Tengo Cuenta</p></a>
                    </div>
                    <div class="form-group text-center">
                        <span><a href="<?php echo constant('URL') ?>login" class="olvide1">INICIAR SESIÓN</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>

