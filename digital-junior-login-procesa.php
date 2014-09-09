<?php 
//Gestión de Colegios
// by Alex - date : 26-05-2008
// alexjg@argentina.com

//error_reporting(0);
$username = '';
$password = '';
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysql_connect("localhost", "dav_web", "UserwebDav08");
$db = mysql_select_db("dav_gestion", $conn);

$row_data = mysql_fetch_array(mysql_query ( "SELECT IdColegio, Usuario, Clave FROM WEBColegios where Usuario =  '".$username."' AND Clave = '".$password."' LIMIT 1"));
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
        <section class="tpl-2-col digital-junior gestion">
            <div class="header-image"></div>
            <div class="subnav" data-activa="gestion">
                <?php include("includes/tabs/digital-junior.php"); ?>
            </div>
            <div class="row contenedor">
               <?php
                    if( $username == $row_data[1] and $password == $row_data[2] ) {

                        echo "<form name='access' action='digital-junior-gestion.php' method='POST'><input type='hidden' name='id_colegio' value='".$row_data[0]."' />";
                        echo "</form>";
                        echo "<script language='JavaScript' type='text/JavaScript'> document.access.submit(); </script>";
                    } else {
                        echo "El usuario o contraseña son incorrectos";
                        echo "<form name='access' action='digital-junior-gestion-login.php' method='GET'>";
                        echo "<button action='submit' onclick='document.access.submit();'>Volver</button>";
                        echo "</form>";
                    }
                ?>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
        <!-- local scripts -->
        <script src="js/tabs.js"></script>
        <script src="js/gestion.js"></script>
    </body>
</html>