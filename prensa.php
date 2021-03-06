<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="prensa"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="prensa"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="prensa"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="prensa"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Prensa - DAV UTN</title>
		<meta name="description" content="Entropía es un programa de capacitación y nivelación, orientado a estudiantes que se encuentran cursando el último año del nivel secundario en escuelas públicas, que propone una transformación y evolución de los procesos tradicionales de enseñanza y aprendizaje en Ciencias Básicas. Este programa es desarrollado por el DAV, en conjunto con el Área de Desarrollo Social de la Secretaría de Cultura y Extensión Universitaria.">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
		<?php include('includes/favicon.php'); ?>
		<script src="js/vendor/angular.min.js"></script>
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col prensa">
			<div class="header-image"></div>
			<div class="row contenedor">
				<div class="column medium-9 principal articulos" ng-controller="PrensaController">
					<h1>Prensa</h1>
					<div class="articulo" ng-repeat="articulo in data.articulos">
						<h3>{{articulo.titulo}}</h3>
						<p>{{articulo.texto}} <a ng-href="{{articulo.link}}" target="_blank">Ver más</a></p>
						<p>
							<strong>Fecha:</strong> {{articulo.fecha}}<br/>
							<strong>Fuente:</strong>
							<span ng-switch="!!articulo.fuente_link">
								<a ng-href="{{articulo.fuente_link}}" ng-switch-when="true" target="_blank">{{articulo.fuente}}</a>
								<span ng-switch-when="false">{{articulo.fuente}}</span>
							</span>
							<span ng-if="articulo.autor"><br/><strong>Autor:</strong> {{articulo.autor}}</span>
						</p>
					</div>
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		<script src="js/tabs.js"></script>
		<script src="js/prensa.js"></script>
	</body>
</html>