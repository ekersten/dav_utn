<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="menciones"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="menciones"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="menciones"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="menciones"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Digital Junior - DAV UTN</title>
        <meta name="description" content="El Programa Digital Junior le brinda los siguientes  BENEFICIOS: Contenidos Actualizados, Capacitación docente,  Materiales de estudio,  Certificación de conocimientos  y Asesoramiento.">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="css/dav.css">
        <script src="js/vendor/modernizr.js"></script>
        <!--[if lt IE 9]><script src="js/vendor/rem.min.js"></script><![endif]-->
        <script src="js/vendor/angular.min.js"></script>
        <?php include('includes/favicon.php'); ?>
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <section class="tpl-2-col digital-junior">
            <div class="header-image"></div>
            <div class="subnav" data-activa="menciones">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
                <div class="column medium-9 principal">
                    <h1>Menciones de honor</h1>
                    <ul class="breadcrumbs">
                        <li>Programa para escuelas</li>
                        <li><a href="digital-junior-informacion.php">Digital Junior</a></li>
                        <li class="actual">Menciones de Honor</li>
                    </ul>
                    <div class="menciones" ng-controller="MencionesController">
                        <div class="row">
                            <div class="column small-12">
                                <h2>{{data.titulo}}</h2>
                            </div>
                        </div>
                        <div class="row">
                           <div class="column small-12">
                                <p>{{data.texto}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-12">
                                <ul class="small-block-grid-3 medium-block-grid-4 large-block-grid-5 fotos">
                                    <li ng-repeat="foto in data.fotos" class="foto">
                                        <a ng-href="{{foto.src}}" class="fancybox" rel="menciones" data-colegio="{{foto.colegio}}" data-mencion="{{foto.mencion}}" data-ubicacion="{{foto.ubicacion}}" title="{{foto.colegio}}">
                                            <img ng-src="{{foto.mini}}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="column small-12">
                                <p><em>{{data.felicitacion.texto}}</em></p>
                            </div>
                        </div>
                        <div class="row colegios">
                            <div class="column small-12">
                                <ul class="small-block-grid-2">
                                    <li ng-repeat="colegio in data.felicitacion.colegios"><strong>{{colegio.nombre}}</strong> - {{colegio.ubicacion}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column medium-3 secundario">
                     <?php include("includes/lateral/lateral-dj-video.php"); ?>
                </div>

            </div>

        </section>
        <?php include("includes/footer.php"); ?>
        <!-- local scripts -->
        <script src="js/tabs.js"></script>
        <script src="js/menciones.js"></script>
    </body>
</html>