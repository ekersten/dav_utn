<?php
session_start();
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== 'true') {
  if (isset($_POST['nombre']) && isset($_POST['clave'])) {
    $archivo = file_get_contents('docs/pass.txt');
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $campos = explode('|', $archivo);
    if ($campos[0] === $nombre && $campos[1] === $clave) {
      $_SESSION['logueado'] = 'true';
    } else {
      header('location: digital-junior-contenidos-error.php');
      exit;
    }
  } else {
    header('location: digital-junior-contenidos-error.php');
    exit;
  }
}
?>
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
            <div class="row contenedor">
                <div class="column medium-9 principal contenidos">
                    <h1>Contenidos de certificación</h1>
                    <ul class="breadcrumbs">
                        <li>Programa para escuelas</li>
                        <li><a href="digital-junior-informacion.php">Digital Junior</a></li>
                        <li class="actual">Contenidos de Certificación</li>
                    </ul>
                   <h3>Modalidad Secundario</h3>
                   <p>Temarios y modelos de Examen: (para descargar)</p>
                   <ul class="lista-contenidos">
                        <li><a href="docs/UTN.BA Certificacion en Office.rar">Office</a></li>
                        <li><a href="docs/UTN.BA Certificacion en Diseno.rar">Diseño</a></li>
                        <li><a href="docs/UTN.BA Certificacion en Diseno Multimedial.rar">Diseño Multimedial</a></li>
                        <li><a href="docs/UTN.BA Certificacion en Programacion.rar">Programación</a></li>
                    </ul>
                   <h3>Modalidad Junior</h3>
                   <p>Temarios y modelos de Examen: (para descargar)</p>
                   <ul class="lista-contenidos">
                        <li><a href="docs/UTN.BA Certificacion Nivel Junior.rar">Office</a></li>
                   </ul>
                <h3>Comentarios:</h3>
                <p>La modalidad Secudario se sugiere para alumnos de 14 a 17 años de edad, acompaña a la propuesta de contenidos una metodología de examen de corte universitario. La modalidad Junior aplica para alumnos de 11 a 13 años de edad, acompaña a la propuesta de contenidos una metodología específica de examen.</p>
                <p>Les recordamos que conforman la propuesta estándar del programa temarios de diversas aplicaciones en diferentes niveles de complejidad. A fines organizativos los temarios a descargar se han agrupado según la naturaleza de las aplicaciones en las siguientes categorías: oficina, TAC y sistemas operativos, diseño gráfico, diseño multimedial y programación.</p>
                <p>Cada certificado corresponde a una aplicación y nivel de examen particular. De esta forma, el colegio diseña su propuesta de certificación, eligiendo las aplicaciones a acreditar por sus alumnos y los niveles de examen correspondientes.</p>
                <p>Asimismo, si desean certificar una aplicación de la cual no se haya dispuesto el temario de estudio, pueden consultar sobre la posibilidad de incluirla dentro del proyecto de certificación del colegio.</p>
                <p>A modo de referencia para cada aplicación y nivel de examen se publica un modelo de examen tipo. Al momento que el colegio se incorpora al programa, tiene acceso a la totalidad de los materiales de estudio.</p>
                <p>Si lo desea descargue el siguiente archivo con sugerencias para comenzar a diseñar el plan para su colegio.</p>
                <p><a class="descargar" href="docs/disenar_plan.pdf" target="_blank">Descargar Plan Colegio</a></p>
 
                </div>
               <!--  <div class="column medium-3 secundario">
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
                </div> -->
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
        <!-- local scripts -->
        <script src="js/tabs.js"></script>
    </body>
</html>