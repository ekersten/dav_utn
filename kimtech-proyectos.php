<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>KIMTECH - DAV UTN</title>
		<meta name="description" content="Kimtech permite integrar conocimientos de distintas asignaturas, aplicándolos a situaciones reales. Estimulando la capacidad creativa y desarrollando un pensamiento ordenado, tendiente a la búsqueda de soluciones.">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
		<?php include('includes/favicon.php'); ?>
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col kimtech">
			<div class="header-image"></div>
			<div class="subnav" data-activa="proyectos">
				<?php include("includes/tabs/kimtech.php"); ?>
			</div>
			<div class="row contenedor">
				<div class="column medium-9 principal">
					<h1>Proyectos</h1>
					<ul class="breadcrumbs">
						<li>Programa para escuelas</li>
						<li><a href="kimtech-informacion.php">Kimtech</a></li>
						<li class="actual">Proyectos</li>
					</ul>
					<h2>PROXIMAMENTE</h2>
					
				</div>
				<div class="column medium-3 secundario">
					<?php include("includes/lateral/lateral-kimtech.php"); ?>
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
	</body>
</html>