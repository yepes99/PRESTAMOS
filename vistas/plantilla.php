<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
	
    <?php include "./vistas/inc/Link.php";?>
	

</head>
<body>
    <?php 
    $peticionAjax=false; //verifica si es peticion ajax o no
    require_once "./controladores/vistasControlador.php";
    $IV= new VistasControlador();
    $vistas=$IV->obtener_vistas_controlador();
    //al no pasar ningun parametro por view pondra a login o 404

    if($vistas=="login" || $vistas=="404"){
        require_once "./vistas/contenidos/".$vistas."-view.php";
    }else{

   
    ?>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<?php
            include "./vistas/inc/NavLateral.php";
        ?>
		<!-- Page content -->
		<section class="full-box page-content">
		
        <?php
            include "./vistas/inc/NavBar.php";
            include $vistas;
        ?>
			

		</section>
	</main>

    <?php
    }
            include "./vistas/inc/Script.php";
        ?>
			
	
	
</body>
</html>