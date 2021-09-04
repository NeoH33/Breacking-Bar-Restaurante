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
        <H2>Agregar Productos</H2>
        <form method="post" enctype="multipart/form-data" data-ajax="false" action="<?php echo constant('URL') ?>agregarProducto/agregar">
            <table>
                <tr>
                    <td><label>Nombre:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nombreP" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label>Precio:</label></td>
                </tr>
                <tr>
                    <td><div class="input-group mb-3">
                        <span class="input-group-text">S/</span>
                        <input type="text" name="precioP" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                        <span class="input-group-text">.00</span>
                        </div></td>
                </tr>
                <!--<tr>
                    <td><input type="text" name="precioP" class="form-control"></td>
                </tr>-->
                <tr>
                <tr>
                    <td>
                        <div id="visualizar-portada">
                            <img src="https://cdn.pixabay.com/photo/2017/04/26/11/01/plate-2262331__340.jpg" class="img-thumbnail" width="330" height="330">
                        </div>
                    </td>
                </tr>
                    <td>Imagen:</td>
                </tr>
                <tr>
                    <td><input type="file" name="imagenP" class="form-control" id="btn_img" onchange="return validarIMG()" multiple required></td>
                </tr>
                <tr>
                    <td>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" name="descripcionP" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Descripción:</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" name="ingredientesP" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Ingredientes:</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Categoria:</td>
                </tr>
                <tr>
                    <td><select name="codigoCategoria" class="form-select">
                        <?php
                            foreach ($this ->tabla as $fila){
                        ?>
                        <option value="<?php echo $fila["codigoCAT"] ?>"><?php echo $fila["nombreCAT"] ?></option>

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