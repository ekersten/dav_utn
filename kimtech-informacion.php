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
			<div class="subnav" data-activa="informacion">
				<?php include("includes/tabs/kimtech.php"); ?>
			</div>
			<div class="row contenedor">
				<div class="column medium-9 principal">
					<h1>Información General</h1>
					<ul class="breadcrumbs">
						<li>Programa para escuelas</li>
						<li><a href="kimtech-informacion.php">Kimtech</a></li>
						<li class="actual">Información General</li>
					</ul>
					<blockquote>&ldquo;La única habilidad competitiva a largo plazo es la habilidad para aprender.&rdquo;<br/> S. Paperts</blockquote>
					<p>KIMTECH es un programa de<span class="destacado"> Capacitación y Certificación en Robótica Educativa que desarrollan alumnos y profesores del colegio,</span> en conjunto con los especialistas de la UTN.BA.</p>
					<p>La propuesta pedagógica ha sido diseñada para que puedan participar escuelas de todas las especialidades, que quieran valerse de la tecnología para propiciar en sus alumnos una instancia de aplicación e integración de conocimientos de múltiples asignaturas, desarrollando la lógica de resolución de problemas y el pensamiento creativo, la capacidad de aprender a través de la investigación y  la experimentación, en un marco de trabajo propicio para el  desarrollo de las habilidades blandas (actitudinales, interpersonales) por parte de los alumnos.</p>
					<p>KIMTECH ha sido pensado para que las escuelas logren abordar el trabajo con robótica <span class="destacado">superando el obstáculo que impone la adquisición de equipamiento tecnológico y otras limitaciones,</span> como ser tiempo, espacio y la formación de especialistas.</p>
					
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