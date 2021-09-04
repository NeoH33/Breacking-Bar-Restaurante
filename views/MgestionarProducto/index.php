<?php
	require_once("views\administrador\index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/MenuCuenta.css">
    <script type="text/javascript">

    $(document).mouseup(function(){

        
        $("a").mouseup(function(){
            $("a").removeClass("hov");
            $(this).addClass("hov");

        });
        
    });


</script>
    
</head>
<body>
    <nav class="nav nav-pills flex-column flex-sm-row nav-justified">
    
        <li class="nav-item">
            <a  class="nav-link" style="color: white" id="letras" href="<?php echo constant('URL') ?>admMenu">MENÚ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" id="letras" href="<?php echo constant('URL') ?>admPlatosCarta">PLATOS A LA CARTA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" id="letras" href="<?php echo constant('URL') ?>admBebidas">BEBIDAS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" id="letras" href="<?php echo constant('URL') ?>admPostres">POSTRES</a>
        </li>
    </nav>
</body>
</html>


