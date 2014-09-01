<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Digital Junior - DAV UTN</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/dav.css">
		<script src="js/vendor/modernizr.js"></script>
		<!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
	</head>
	<body>
		<?php include("includes/header.php"); ?>
		<section class="tpl-2-col contacto">
			<div class="header-image"></div>
			<div class="row contenedor">
				<div class="column medium-9 principal">
					<div class="row">
						<div class="column medium-12">
							<h1>Contacto</h1>
						</div>
					</div>
					<form action="envio.php" method="post">
						<div class="row">
							<div class="column medium-6">
								<p>
									<?php
										//genero la variables para guardar info del formulario
										$nombre=$_POST['nombre'];
										$email=$_POST['mail'];
										$telefono=$_POST['tel'];
										$colegio=$_POST['colegio'];
										$ciudad=$_POST['ciudad'];
										$programa=$_POST['programa'];
										$consulta=$_POST['consulta'];


										$remitente="From: $nombre <$email>";
										// destino donde va a llegar la info
										$destino="ekersten@gmail.com";
										// yamadatomas@gmail.com

										$asunto= $nombre ." envio la siguiente consulta";

										$contenido="Nombre: " . $nombre . "\r\n";
										$contenido.="Email: " . $email. "\r\n";
										$contenido.="Telefono: " . $telefono . "\r\n";
										$contenido.="Colegio: " . $colegio . "\r\n";
										$contenido.="Ciudad: " . $ciudad . "\r\n";
										$contenido.="Programa: " . $programa . "\r\n";
										$contenido.="Consulta: " . $consulta;

										// primer mail
										mail($destino,$asunto,$contenido,$remitente);
										echo "Gracias por escribirnos. A la brevedad le responderemos ";
									?>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="column medium-12">
								<p class="botones">
									<input type="submit" name="" value="Enviar">
									<input type="reset" name="" value="Cancelar">
								</p>
							</div>
						</div>
					</form>
				</div>
				<div class="column medium-3 secundario">
					<h2>Datos Adicionales</h2>
					<p class="cargo"><strong>Ing. Jorge Alfredo Almiña</strong><br/>Director a cargo</p>
					<p class="cargo"><strong>Ing. Soledad Grisel Corrales</strong><br/>Coordinadora General</p>
					<hr>
					<p>Medrano 951 2º piso - Capital Federal <br/>
					Teléfonos: 4867-7565/7545<br/>
					<a href="mailto:dav@sceu.frba.utn.edu.ar">dav@sceu.frba.utn.edu.ar</a></p>
										

					
				</div>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
		<!-- local scripts -->
		
	</body>
</html>