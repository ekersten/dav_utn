<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="menciones"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="menciones"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="menciones"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" ng-app="menciones"> <!--<![endif]-->
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
        <section class="tpl-2-col digital-junior">
            <div class="header-image"></div>
            <div class="subnav" data-activa="7">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
                <div class="column medium-12 pricipal">
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
                            <div class="column medium-6">
                                <figure>
                                    <img ng-src="{{data.cover.src}}" alt="{{data.cover.texto}}">
                                    <figcaption>{{data.cover.texto}}</figcaption>
                                </figure>
                            </div>
                            <div class="column medium-6">
                                <p>{{data.texto}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-12">
                                <ul class="small-block-grid-2 medium-block-grid-5 large-block-grid-6 fotos">
                                    <li ng-repeat="foto in data.fotos" class="foto">
                                        <a ng-href="{{foto.src}}" class="fancybox" rel="menciones" data-colegio="{{foto.colegio}}" data-mencion="{{foto.mencion}}" data-ubicacion="{{foto.ubicacion}}" title="{{foto.colegio}}">
                                            <img ng-src="{{foto.src}}">
                                        </a>
                                    </li>
                                </ul>
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
        <script src="js/menciones.js"></script>
    </body>
</html>