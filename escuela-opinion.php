<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Escuela 2.0 - DAV UTN</title>
		<meta name="description" content="Escuela 2.0 pone el acento en trasformar la Escuela,  impulsado un cambio estructural a través del diseño nuevas estrategias pedagógicas aprovechando las NTICs y haciendo especial hincapié en la capacitación docente.">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
		<?php include('includes/favicon.php'); ?>
		
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col escuela">
			<div class="header-image"></div>
			<div class="subnav" data-activa="opinion">
				<?php include("includes/tabs/escuela.php"); ?>
			</div>
			<div class="row contenedor">
				<div class="column medium-9 principal">
					<h1>Experiencias</h1>
					<ul class="breadcrumbs">
						<li>Programa para escuelas</li>
						<li><a href="escuela-informacion.php">Escuela 2.0</a></li>
						<li class="actual">Experiencias</li>
					</ul>
					<div class=" ">
						<img src="img/testimoniosE2.0.png" alt="Testimonios E 2.0" width="1000">
						
					</div>
				</div>
				<div class="column medium-3 secundario">
					<?php include("includes/lateral/lateral-escuela.php"); ?>
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/entrevistas.js"></script>
	</body>
</html>