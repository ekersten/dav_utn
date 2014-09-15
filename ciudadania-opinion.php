<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="experiencias" ng-init="data_src='data/experiencias-ciudadania.json'"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="experiencias" ng-init="data_src='data/experiencias-ciudadania.json'"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="experiencias" ng-init="data_src='data/experiencias-ciudadania.json'"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="experiencias" ng-init="data_src='data/experiencias-ciudadania.json'"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Ciudadania Digital - DAV UTN</title>
		<meta name="description" content="El programa CIUDADANÍA DIGITAL es un espacio formulado para la concientización en materia de Uso responsable de Internet y las Nuevas Tecnologías. Al mismo tiempo que permite a los estudiantes conocer las tecnologías del e-learning y experimentar una propuesta de formación a distancia.">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
		<script src="js/vendor/angular.min.js"></script>
		<script src="js/vendor/angular-sanitize.min.js"></script>
		<?php include('includes/favicon.php'); ?>
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col ciudadania">
			<div class="header-image"></div>
			<div class="subnav" data-activa="opinion">
				<?php include("includes/tabs/ciudadania.php"); ?>
			</div>
			<div class="row contenedor">
				<div class="column medium-9 principal">
					<h1>Experiencias</h1>
					<ul class="breadcrumbs">
						<li>Programa para escuelas</li>
						<li><a href="ciudadania-informacion.php">Ciudadania Digital</a></li>
						<li class="actual">Experiencias</li>
					</ul>
					<p>Queremos compartir con Uds. la opinión de los algunos alumnos que ya participaron de esta experiencia y los consejos que ellos quisieron dejarles a los estudiantes que decidan ser parte de la próxima edición de este curso.</p>
					<div class="experiencias" ng-controller="ExperienciasController">
						<div class="slider">
							<div class="slide" ng-repeat="item in data.experiencias">
								<div class="texto" ng-bind-html="item.texto">{{item.texto}}</div>
								<div class="autor">{{item.autor}}</div>
							</div>
						</div>
						<div class="slides-pager"></div>
					</div>
				</div>
				<div class="column medium-3 secundario">
					 <?php include("includes/lateral/lateral-ciudadania.php"); ?>
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/vendor/jquery.cycle2.min.js"></script>
		<script src="js/experiencias.js"></script>
	</body>
</html>