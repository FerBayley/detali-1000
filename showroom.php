<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Showroom - Detali Sastreria Italiana</title>
	<meta name="description" content="Sastreria de hombres estilo Italia ubicada en centro porteño con años de trayectoria vistiendo al hombre moderno">

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<!-- VIEWPORT -->

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/main.css" />
	<!-- CSS -->

	<!-- FAVICON -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- FAVICON -->

</head>
<body>
	<?php include_once("includes/analyticstracking.php") ?>
	<?php include("includes/header-interno.php"); ?>

	<section class="Logus">
		<a href="index.php">
			<img src="img/logo.png" width="178" height="63" alt="Detali sastreria Italiana">
		</a>
	</section>

	<section class="Sastreria">
		<h2>Ven&iacute; a conocer nuestro showroom</h2>		
		<section class="ShowRoom">
			<img src="img/showroom.jpg" width="1500" height="431" alt="Showroom de Detali">
		</section> <!-- End of ShowRoom -->


		<section class="GaleriaShowRoom">
			<ul>
				<li><img src="img/showroom/show1.jpg" width="605" height="454" alt="Showroom Detali"></li>
				<li><img src="img/showroom/show2.jpg" width="605" height="454" alt="Showroom Detali"></li>
				<li><img src="img/showroom/show3.jpg" width="605" height="454" alt="Showroom Detali"></li>
				<li><img src="img/showroom/show4.jpg" width="605" height="454" alt="Showroom Detali"></li>
			</ul>
		</section> <!-- End of GaleriaShowRoom -->


		<section class="Pie_internas">
			<?php include("includes/footer-internas.php"); ?>
		</section> <!-- End of Pie_internas -->

	<script src="js/modernizr.custom.32037"></script>
	
	
</body>
</html>