<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="font-family: Comic Sans;">
    <div class="contRegistro" align="center">
        <h1>Registro Dirección</h1>
        <form class="formulario" action="<?php echo constant('URL') ?>registroDireccion/agregarDireccion" method="post">
            <table>
                <tr>
                    <td><label>Calle: </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="calle" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label>Numero: </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="numero" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label>Referencia: </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="referencia" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label>Distrito: </label></td>
                </tr>
                <tr>
                    <td>
                        <select name="codigoDistrito" class="form-select">
                        <?php
                            foreach ($this ->tabla as $fila){
                        ?>
                        <option value="<?php echo $fila["codigo"] ?>"><?php echo $fila["nombreDis"] ?></option>

                        <?php
                            }
                        ?>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                <?php
                            foreach ($this ->tabla as $fila){
                        ?>
                    <td><input type="text" name="codigoUsuario" value="<?php echo $fila["nombre"]?>" readonly style="display:none"></td>
                    <?php
                            }
                        ?>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td><input type="submit" name="Registrar" value="Registrar" class="btn btn-primary"></td>
                </tr>
                <tr>
                    <td>
                        <p>Tengo Cuenta<br><br><a href="<?php echo constant('URL') ?>login">Iniciar Sesion </a> </p>
                        </p>
                    </td>
                </tr>
            </table>

        </form>

    </div>
    
</body>
</html>