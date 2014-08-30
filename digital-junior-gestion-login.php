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
        <section class="tpl-2-col digital-junior">
            <div class="header-image"></div>
            <div class="subnav" data-activa="6">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
                <div class="column medium-9 principal">
                    <h1>Reserva de fechas de examen</h1>
                    <ul class="breadcrumbs">
                        <li>Programa para escuelas</li>
                        <li><a href="digital-junior-informacion.php">Digital Junior</a></li>
                        <li class="actual">Gestión de fechas</li>
                    </ul>
                    <p>Mediante la presente sección podrán informarse respecto de la organización de las fechas de examen reservadas por el colegio. Consultar el estado de la documentación previa que su colegio debe remitir e informarse sobre la asignación de horarios y profesores a sus fechas de examen.</p>
                   <form action="digital-junior-gestion.php" method="post">
                        <div class="row">
                            <div class="column medium-6">
                                <p>
                                    <label>Nombre de Usuario</label>
                                    <input type="text" name="nombre" value="" required>
                                </p>
                                <p>
                                    <label>Contraseña</label>
                                    <input type="password" name="clave" value="" required>
                                </p>
                                <p class="botones">
                                    <input type="submit" name="" value="Ingresar">
                                </p>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="column medium-3 secundario">
                   <div class="video">
                        <a href="https://www.youtube.com/watch?v=-dxWBb0NVbo" class="fancybox-media"><img src="img/video_dj.jpg" alt=""> </a>
                    </div>
                    <p>El Programa <em>Digital Junior</em> le brinda los siguientes <strong>BENEFICIOS</strong></p>
                    <ul>
                        <li>Contenidos Actualizados</li>
                        <li>Capacitación docente</li>
                        <li>Materiales de estudio</li>
                        <li>Certificación de conocimientos</li>
                        <li>Asesoramiento</li>
                    </ul>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
        <!-- local scripts -->
        <script src="js/tabs.js"></script>
    </body>
</html>