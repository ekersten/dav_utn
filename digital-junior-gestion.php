<?php error_reporting(0); ?>
<?php
require ('xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();

function si_no($entrada, $idcolegio){
    if ($entrada=="true"){
        $db_conn = mysql_connect("localhost", "dav_web", "UserwebDav08");
        $db = mysql_select_db("dav_gestion", $db_conn);
        if (!$db_conn) {
            $salida = "Could not connect: " . mysql_error();
            }
        
        $result = mysql_query("SELECT colegioid FROM controlnormativas WHERE colegioid = ".$idcolegio);
        $ok_result = mysql_num_rows($result);
        if ($ok_result == 1){
            mysql_query("UPDATE controlnormativas SET acepto = 'Si' WHERE colegioid = ".$idcolegio."");
        } else {
            mysql_query("INSERT INTO controlnormativas (colegioid, acepto, pasado) VALUES (".$idcolegio.",  'Si', 'false')");
        }
        $salida = $idcolegio." - ".$ok_result. mysql_error();
        mysql_close($db_conn);
    }else{
        $db_conn = mysql_connect("localhost", "dav_web", "UserwebDav08");
        $db = mysql_select_db("dav_gestion", $db_conn);
        $result = mysql_query("SELECT colegioid FROM controlnormativas WHERE colegioid = ".$idcolegio."");
        $ok_result = mysql_num_rows($result);
        if ($ok_result == 1){
            mysql_query("UPDATE controlnormativas SET acepto = 'No' WHERE colegioid = ".$idcolegio."");
        }
        mysql_close($db_conn);
        $salida = "";
        }

   //instanciamos el objeto para generar la respuesta con ajax
   $respuesta = new xajaxResponse();
   //escribimos en la capa con id="respuesta" el texto que aparece en $salida
   $respuesta->assign("respuesta","innerHTML",$salida);

   //tenemos que devolver la instanciación del objeto xajaxResponse
   return $respuesta;
}

//asociamos la función creada anteriormente al objeto xajax
$xajax->registerFunction("si_no");

//El objeto xajax tiene que procesar cualquier petición
$xajax->processRequest();
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
        <?php include('includes/favicon.php'); ?>
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