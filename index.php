<!DOCTYPE html>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Detali Sastreria Italiana</title>
	<meta name="description" content="Sastreria de hombres estilo Italia ubicada en centro porteño con años de trayectoria vistiendo al hombre moderno">

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<!-- VIEWPORT -->

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/normalizador.css" />
	<!-- CSS -->

	<!-- FAVICON -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- FAVICON -->

	<script type="text/javascript">
		function closeVentana(){
			$('.Ventana').fadeOut("slow");
		}
	</script>

</head>
<body>

	<div class="Ventana">
		<div class="Ventana_imagen">
			<img src="img/promo.jpg" alt="Promociones Detali">		
				<div class="Cerrar"><a href="javascript:closeVentana();">CERRAR VENTANA</a></div> <!-- End of Cerrar -->
		</div> <!-- End of Ventana_imagen -->
	</div> <!-- End of Ventana -->

	<?php include_once("includes/analyticstracking.php") ?>
	<?php include_once("includes/preheader.php") ?>

	<header>
		<?php include("includes/header-interno.php"); ?>
	</header> <!-- End of Header -->

	<section class="Contenido-principal">	
		
		<section class="Columna-menu">
			<ul>
				<li><img src="img/logo.png" alt="Detali Sastreria Italiana"></li>
				<li><a href="trajes.php">TRAJES</a></li>
				<li><a href="camisas.php">CAMISAS</a></li>
				<li><a href="corbatas.php">CORBATAS</a></li>
				<li><a href="pantalones.php">PANTALONES</a></li>
				<li><a href="zapatos.php">ZAPATOS</a></li>
				<li><a href="cinturones.php">CINTURONES</a></li>
				<li><a href="accesorios.php">ACCESORIOS</a></li>
			</ul>
		</section> <!-- End of Columna-menu -->

		<section class="Redes">
			<ul>
				<li>
					<a href="https://www.facebook.com/SastreriaDetali" target="_blank">
						<img src="img/facebook.png" alt="Facebook">
					</a>
				</li>
				<li>
					<a href="https://twitter.com/DetaliSastreria" target="_blank">
						<img src="img/twitter.png" alt="Seguinos en Twitter">
					</a>
				</li>
				<li>
					<a href="https://www.pinterest.com/detali" target="_blank">
						<img src="img/pinterest.png" alt="Mira nuestras imagenes en Pinterest">
					</a>
				</li>
				<li>
					<a href="https://instagram.com/detalisastreria/" target="_blank">
						<img src="img/instagram.png" alt="Instagram">
					</a>
				</li>
				<li>
					<a href="https://ar.linkedin.com/in/detali" target="_blank">
						<img src="img/linkedin.png" alt="Linkedin">
					</a>
				</li>
			</ul>
		</section> <!-- End of Redes -->

		<footer>
			<p>
				Derechos reservados 2015  -  Av Roque Saenz Peña 615  -  
				Piso 5 Oficinas 512 - Tel: 4-328-9656 / <a href="mailto:sastreria@detalil.com.ar">
					sastreria@detali.com.ar
				</a>
			</p>
		</footer> <!-- End of Footer -->
	</section> <!-- End of Contenido-principal -->

	<script src="js/modernizr.custom.32037.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
</body>
</html>