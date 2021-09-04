<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/editarPerfil.css">
    <title>Document</title>
</head>
<body>
<script> 
    function eventoOnclick(){ 
        background-color: hsl(180, 52%, 36%);

    } 
    </script>
    <div class="MenuNav">
        <div class="perfil">
            <img class="fotoPerfil" src="img\Logo restaurante.png" alt=""> 
        </div>
        <br><br>
        <div class="Editar1" onclick="eventoOnclick()">
        <hr style="color:white">
        <img src="https://img.icons8.com/ios-glyphs/30/ffffff/edit-user-male.png"/><span>Actualizar Usuario</span>
        <hr style="color:white">
        </div> 
        <div class="Editar">
        <hr style="color:white">
        <img src="https://img.icons8.com/small/32/ffffff/address.png"/><span>Actualizar Dirección</span>
        <hr style="color:white">
        </div>
        <div class="Editar">
        <hr style="color:white">
        <img src="https://img.icons8.com/wired/32/ffffff/shopping-bag.png"/><span> Lista de Compras </span>
        <hr style="color:white">
        </div>
    </div>
</body>
</html>