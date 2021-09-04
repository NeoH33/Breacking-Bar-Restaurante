<?php
   require_once("views\administrador\index.php");

    //Recoger la variable fila (array)
	if (isset($this->fila)) {
		$fila = $this->fila;
	}
	else
	{
		//Al no existir $this->fila
		//crear un arreglo con key => valor
		$fila = array('codigoUS'=>0);
	}


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
        <H1>Editar Usuario</H1>
        <form method="post" enctype="multipart/form-data" action="<?php echo constant('URL') ?>editarUsuario/ActualizarUsuario">
            <table>
                <tr>
                    <td>Codigo:</td>
                </tr>
                <tr>
                <td><input type="text" name="id" value="<?php echo $fila["codigoUS"]?>" class="form-control" readonly></td>
                </tr>

                <tr>
                <tr>
                    <td>
                        <div id="visualizar-portada">
                            <img src="<?php echo constant('URL')?>/img/<?php echo $fila["imagenUS"] ?>" class="img-thumbnail" width="330" height="330">
                        </div>
                    </td>
                </tr>
                    <td>Imagen:</td>
                </tr>
                <tr>
                    <td><input type="file" name="foto" class="form-control" id="btn_img" onchange="return validarIMG()" multiple></td>
                </tr>

                <tr>
                    <td><label>Nombre de Usuario:</label></td>
                </tr>
                <tr>
                    <td><input type="text" required name="usuario" value="<?php echo $fila['usuarioUS'] ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td><label>Telefono:</label></td>
                </tr>
                <tr>
                    <td><input type="text" required name="telefono" value="<?php echo $fila['telefonoUS'] ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                </tr>
                <tr>
                    <td><input type="email" required name="email" value="<?php echo $fila['emailUS'] ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td><label>Contraseña:</label></td>
                </tr>
                <tr>
                    <td><input type="password" required name="pass" value="<?php echo $fila['passUS'] ?>" class="form-control"></td>
                </tr>
                
                <tr>
                    <td>Categoria:</td>
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
                    <td><input type="submit" name="agregar" value="Actualizar" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>

    
</body>
</html>