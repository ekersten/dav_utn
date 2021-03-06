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
        <?php include('includes/favicon.php'); ?>
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <section class="tpl-2-col digital-junior">
            <div class="header-image"></div>
            <div class="subnav" data-activa="materiales">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
                <div class="column medium-9 principal">
                    <h1>Materiales de Estudio</h1>
                    <ul class="breadcrumbs">
                        <li>Programa para escuelas</li>
                        <li><a href="digital-junior-informacion.php">Digital Junior</a></li>
                        <li class="actual">Materiales de Estudio</li>
                    </ul>
                    <p>Esta sección se encuentra habilitada únicamente para los colegios que ya han firmado su convenio de certificación.</p>
                    <p>En la misma podrán encontrar materiales teóricos-prácticos para la preparación de sus alumnos. Dentro de estos se destacan novedosas prácticas de estudio, en particular para las herramientas del paquete Office, Diseño Gráfico y Multimedial; y más de 300 modelos de examen catalogados por herramienta y nivel.</p>
                    <div class="row">
                        <div class="column medium-6">
                            <ul class="lista-materiales">
                                <li>Manuales Teóricos</li>
                                <li>Ejercicios Prácticos</li>
                                <li>Tests Interactivos </li>
                                <li>Modelos de Examen</li>
                            </ul>
                        </div>
                        <div class="column medium-6">
                             <p><a class="descargar medio" href="http://dav.sceu.frba.utn.edu.ar/campusvirtual/login/index.php" target="_blank">Acceder a los Materiales de Estudio</a></p>
                        </div>
                    </div>
                    
                </div>
                <div class="column medium-3 secundario">
                  <?php include("includes/lateral/lateral-dj.php"); ?>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
        <!-- local scripts -->
        <script src="js/tabs.js"></script>
    </body>
</html>