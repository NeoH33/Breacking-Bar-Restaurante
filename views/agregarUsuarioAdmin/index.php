<?php
    require_once("views/administrador/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/mainStyle.css"> -->
    <title>Document</title>
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
						'<embed src="'+e.target.result+'" width="360" height="220" >';
					};
					visor.readAsDataURL(btn_img.files[0]);
				}
			}

		}
    </script>
</head>
<body style="font-family: Comic Sans;">
    <div align="center">
        <H2>Agregar Usuarios</H2>
        <form method="post" enctype="multipart/form-data" data-ajax="false" action="<?php echo constant('URL') ?>agregarUsuarioAdmin/agregarUsuarioAdmin">
            <table>
                
                <tr>
                <tr>
                    <td>
                        <div id="visualizar-portada" align="center">
                            <img src="img\Perfil.jpg" class="img-thumbnail" width="200" height="200">
                        </div>
                    </td>
                </tr>
                    <td>Imagen:</td>
                </tr>
                <tr>
                    <td><input type="file" name="foto" class="form-control" id="btn_img" onchange="return validarIMG()" multiple required></td>
                </tr>

                <tr>
                    <td><label>Nombre de Usuario:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="usuario" class="form-control" required></td>
                </tr>

                <tr>
                    <td><label>Telefono:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="telefono" class="form-control" required></td>
                </tr>

                <tr>
                    <td><label>Email:</label></td>
                </tr>
                <tr>
                    <td><input type="email" name="email" class="form-control" required></td>
                </tr>

                <tr>
                    <td><label>Contraseña:</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" class="form-control" required></td>
                </tr>
                
                <tr>
                    <td>Tipo de Usuario:</td>
                </tr>
                <tr>
                    <td><select name="codigoTU" class="form-select">
                        <?php
                            foreach ($this ->tabla as $fila){
                        ?>
                        <option value="<?php echo $fila["codigoTU"] ?>"><?php echo $fila["nombreTU"] ?></option>

                        <?php
                            }
                        ?></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td><input type="submit" name="agregar" value="Agregar" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>

    
</body>
</html>