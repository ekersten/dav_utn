<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="modeloproyectos"  ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="modeloproyectos"  ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="modeloproyectos"  ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="modeloproyectos" ng-init="categories_src='data/modelo-categorias.json'; projects_src='data/modelo-proyectos.json'"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Modelo 1 a 1 - DAV UTN</title>
		<meta name="description" content="El programa CIUDADANÍA DIGITAL es un espacio formulado para la concientización en materia de Uso responsable de Internet y las Nuevas Tecnologías. Al mismo tiempo que permite a los estudiantes conocer las tecnologías del e-learning y experimentar una propuesta de formación a distancia.">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
  <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
  <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->
		<script src="js/vendor/angular.min.js"></script>
		<script src="js/vendor/angular-route.min.js"></script>
		<?php include('includes/favicon.php'); ?>
	</head>
	<body>
		<div id="old_ie_alert">
			Este buscador solo funciona en versiones de Internet Explorer superiores a la 8. Actualize su versión o utilize un navegador alternativo como Firefox o Chrome
		</div>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col modelo1a1">
			<div class="header-image"></div>
			<div class="subnav" data-activa="proyectos">
				<?php include("includes/tabs/modelo.php"); ?>
			</div>
			<div class="row contenedor" ng-controller="MainController">
				<div class="column medium-12 principal">
					<div class="row">
						<div class="column small-4">
							<h1><a href="#/categorias">Proyectos</a></h1>
						</div>
						<div class="column small-4 text-right">
							<h1><span class="title-icon" ng-class="'icon-' + categoria.slug"></span>{{ categoria.nombre }}</h1>
						</div>
					</div>
					<div class="row">
						<div class="column small-12">&nbsp;</div>
					</div>
					<div class="row">
						<div class="column small-8 small-offset-2">
							<form ng-controller="BuscadorController">
								<div class="row">
									<div class="column small-12">
										<input type="text" ng-model="searchdata.q" placeholder="Tema o palabra clave"/>
									</div>
									
								</div>
								<div class="row">
									<div class="column small-4">
										<select ng-model="searchdata.categoria">
											<option value="all">Materia / Asignatura</option>
											<option value="{{ categoria.slug }}" ng-repeat="categoria in categorias">{{ categoria.nombre }}</option>
										</select>
									</div>
									<div class="column small-4">
										<select ng-model="searchdata.herramienta">
											<option value="all">Herramienta</option>
											<option value="{{ herramienta }}" ng-repeat="herramienta in herramientas">{{ herramienta }}</option>
										</select>
									</div>
									<div class="column small-4">
										<select ng-model="searchdata.anio">
											<option value="all">Año</option>
											<option value="{{ anio }}" ng-repeat="anio in anios">{{ anio }}</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="column small-4 small-offset-8 text-right">
										<input type="reset" class="button tiny" value="Limpiar"/>
										<button class="button tiny" ng-click="doSearch()">Buscar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<!-- seccion -->
						<div ng-view></div>
						<!-- /seccion -->
					</div>
				</div>

			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/vendor/underscore-min.js"></script>
		<script src="js/modelo-proyectos.js"></script>
	</body>
</html>