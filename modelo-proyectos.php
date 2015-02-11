<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="modeloproyectos"  ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="modeloproyectos"  ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="modeloproyectos"  ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="modeloproyectos" ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <!--<![endif]-->
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
		<script src="js/vendor/angular-route.min.js"></script>
		<?php include('includes/favicon.php'); ?>
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col modelo1a1">
			<div class="header-image"></div>
			<div class="subnav" data-activa="proyectos">
				<?php include("includes/tabs/modelo.php"); ?>
			</div>
			<div class="row contenedor">
				<!-- seccion -->
				<div ng-view></div>
				<!-- /seccion -->
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/modelo-proyectos.js"></script>
	</body>
</html>