<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="proyectos" ng-init="data_src='data/proyectos-escuela.json'"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="proyectos" ng-init="data_src='data/proyectos-escuela.json'"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="proyectos" ng-init="data_src='data/proyectos-escuela.json'"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="proyectos" ng-init="data_src='data/proyectos-escuela.json'"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Escuela 2.0 - DAV UTN</title>
		<meta name="description" content="Escuela 2.0 pone el acento en trasformar la Escuela,  impulsado un cambio estructural a través del diseño nuevas estrategias pedagógicas aprovechando las NTICs y haciendo especial hincapié en la capacitación docente.">
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
		<section class="tpl-2-col escuela">
			<div class="header-image"></div>
			<div class="subnav" data-activa="proyectos">
				<?php include("includes/tabs/escuela.php"); ?>
			</div>
			<div class="row contenedor">
				<div class="column medium-9 principal">
					<h1>Proyectos</h1>
					<ul class="breadcrumbs">
						<li>Programa para escuelas</li>
						<li><a href="escuela-informacion.php">Escuela 2.0</a></li>
						<li class="actual">Proyectos</li>
					</ul>
					<div ng-controller="ProyectosController" class="proyectos">
						<ul class="tabs">
							<li class="tab" id="{{'tab-' + $index}}" ng-repeat="anio in data.anios" ng-click="tabClick($index)">{{anio.tab}}</li>
						</ul>
						<div id="{{'tab-content-' + $index}}" class="tab-content row" ng-repeat="anio in data.anios">
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
											<li class="proyecto" ng-repeat="proyecto in anio.proyectos" dav-proyecto-fancybox>
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
															<p ng-bind-html="proyecto.areas">{{proyecto.areas}}</p>
															<p><a ng-href="{{proyecto.url}}" class="fancybox-media" target="_blank">Ver Proyecto</a></p>
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
				<div class="column medium-3 secundario">
					<?php include("includes/lateral/lateral-escuela.php"); ?>
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/proyectos.js"></script>
	</body>
</html>