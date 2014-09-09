<?php error_reporting(0); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Digital Junior - DAV UTN</title>
        <meta name="description" content="El Programa Digital Junior le brinda los siguientes  BENEFICIOS: Contenidos Actualizados, Capacitación docente,  Materiales de estudio,  Certificación de conocimientos  y Asesoramiento.">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="css/dav.css">
        <script src="js/vendor/modernizr.js"></script>
        <!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <section class="tpl-2-col digital-junior gestion">
            <div class="header-image"></div>
            <div class="subnav" data-activa="gestion">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
                <div class="column medium-3 botonera">
                    <ul>
                        <li><a href="#" data-seccion="reservar">Reservar Fecha</a></li>
                        <li><a href="#" data-seccion="enviar">Enviar Documentacion</a></li>
                        <li><a href="#" data-seccion="horarios">Organización Horaria</a></li>
                        <li><a href="#" data-seccion="encuesta">Encuesta</a></li>
                    </ul>
                </div>
                <div class="column medium-9 contenido">
                    <div class="seccion" id="reservar"><?php include("includes/gestion/reservar.php"); ?></div>
                    <div class="seccion" id="enviar"><?php include("includes/gestion/enviar.php"); ?></div>
                    <div class="seccion" id="horarios"><?php include("includes/gestion/horarios.php"); ?></div>
                    <div class="seccion" id="encuesta"><?php include("includes/gestion/encuesta.php"); ?></div>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
        <!-- local scripts -->
        <script src="js/tabs.js"></script>
        <script src="js/gestion.js"></script>
    </body>
</html>