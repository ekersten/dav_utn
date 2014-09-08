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
            <div class="subnav" data-activa="2">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
                <div class="column medium-9 principal">
                    <h1>Contenidos de certificación</h1>
                    <ul class="breadcrumbs">
                        <li>Programa para escuelas</li>
                        <li><a href="digital-junior-informacion.php">Digital Junior</a></li>
                        <li class="actual">Contenidos de Certificación</li>
                    </ul>
                    <p>Esta sección presenta Información General del Programa Digital Junior, como ser temarios y modelos de examen.<br/>
                    Para acceder a dicha información deberá ingresar su clave.</p>
                    <form action="digital-junior-contenidos2.php" method="post">
                        <div class="row">
                            <div class="column medium-4 medium-centered">
                                <p>
                                    <label>Nombre de Usuario</label>
                                    <input type="text" name="nombre" value="" required>
                                </p>
                                <p>
                                    <label>Contraseña</label>
                                    <input type="password" name="clave" value="" required>
                                </p>
                                <p class="botones">
                                    <input type="submit" name="" value="Iniciar sesión">
                                    <input type="reset" name="" value="Cancelar">
                                </p>
                            </div>
                        </div>
                        
                    </form>
                    <p>En caso de no ser un usuario registrado envíenos un mail para obtener su clave de ingreso: <br/>
                    <a href="mailto:dav@sceu.frba.utn.edu.ar">dav@sceu.frba.utn.edu.ar</a></p>
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