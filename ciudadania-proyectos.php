<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="proyectos"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="proyectos"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="proyectos"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="proyectos" ng-init="data_src='data/proyectos-ciudadania.json'"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Ciudadania Digital - DAV UTN</title>
		<meta name="description" content="El programa CIUDADANÍA DIGITAL es un espacio formulado para la concientización en materia de Uso responsable de Internet y las Nuevas Tecnologías. Al mismo tiempo que permite a los estudiantes conocer las tecnologías del e-learning y experimentar una propuesta de formación a distancia.">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col ciudadania">
			<div class="header-image"></div>
			<div class="subnav" data-activa="3">
				<?php include("includes/tabs/ciudadania.php"); ?>
			</div>
			<div class="row contenedor">
				<div class="column medium-12 principal">
					<h1>Proyectos</h1>
					<ul class="breadcrumbs">
						<li>Programa para escuelas</li>
						<li><a href="ciudadania-informacion.php">Ciudadania Digital</a></li>
						<li class="actual">Proyectos</li>
					</ul>
					<p>A lo largo del curso hemos interactuado con los alumnos, proponiéndoles tópicos para la reflexión y el intercambio de opiniones entre pares, contenidos de formación e instancias de autoevaluación, desarrollo de trabajos de investigación, tareas individuales y colaborativas. Ejemplo de lo realizado, son los trabajos presentados por los alumnos en las clases. Algunos de los cuales queremos compartir con Uds.</p>
					<div ng-controller="ProyectosController" class="proyectos">
						<ul class="tabs">
							<li class="tab" id="{{'tab-' + $index}}" ng-repeat="anio in data.anios | orderBy:'tab':true" ng-click="tabClick($index)">{{anio.tab}}</li>
						</ul>
						<div id="{{'tab-content-' + $index}}" class="tab-content row" ng-repeat="anio in data.anios | orderBy:'tab':true">
							<div class="column small-12">
								<div class="row">
									<div class="column small-12">
										<h2>{{anio.nombre}}</h2>
										<p>{{anio.texto}}</p>
									</div>
								</div>
								<div class="row">
									<div class="column small-12">
										<ul class="small-block-grid-1 large-block-grid-2 grilla">
											<li class="proyecto"ng-repeat="proyecto in anio.proyectos">
												<div class="inner">
													<div class="row">
														<div class="column small-12">
															<h4>{{proyecto.nombre}}</h4>
															<h6>{{proyecto.sub}}</h6>
														</div>
													</div>
													<div class="row info">
														<div class="column small-4"><img ng-src="{{proyecto.imagen}}" alt="{{proyecto.nombre}}"></div>
														<div class="column small-8">
															<p><strong><ng-pluralize count="{{proyecto.autores.length}}" when="{'one': 'Autor', 'other': 'Autores'}"></ng-pluralize>:</strong> <span ng-repeat="autor in proyecto.autores">{{autor.nombre}}{{$last ? '' : ', '}}</span></p>
															<p>{{proyecto.institucion.nombre}} - {{proyecto.institucion.ubicacion}}</p>
															<p><a ng-href="{{proyecto.url}}">Ver Proyecto</a></p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/vendor/angular.min.js"></script>
		<script src="js/proyectos.js"></script>
	</body>
</html>