<?php 
//Gesti�n de Colegios
// by Alex - Created : 26-05-2008
// Modified : 28-07-2009
// alexjg@argentina.com

//error_reporting(0);

$id_colegio='';
$id_colegio = $_POST['id_colegio'];

//$id_colegio = '47';

$conn = mysql_connect("localhost", "dav_web", "UserwebDav08");

$db = mysql_select_db("dav_gestion", $conn);

$fecha_actualizado = mysql_fetch_array(mysql_query ("SELECT UltimaActualizacion FROM WEBParametros"));

$sql = "SELECT Estado, FechaReserva, Lugar, Participacion, Vacantes FROM WEBReservas where idcolegio = '".$id_colegio."' ORDER BY FechaReserva ASC ";

$result = mysql_query( $sql );

function format_date($fecha){
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
} 

require_once ("includes/email.php");


$message = "\n\nNombre de Colegio : ".$_POST["colegio"]."\nProvincia : ".$_POST["provincia"]."\nLocalidad / Ciudad : ".$_POST["localidad"]."\nCompleta el cuestionario : ".$_POST["nombre"]."\n\n";
$message .= "1. � Cu�l es el nivel de satisfacci�n en relaci�n a la organizaci�n de la fecha de examen ?\n\n";
$message .= "\ta. Comunicaciones previas en relaci�n a la asignaci�n de fecha, horario de examen y documentaci�n a remitir por el colegio : ".$_POST["pregunta_1a"]."\n\n";
$message .= "\tb. Cumplimiento en relaci�n a los horarios pautados : ".$_POST["pregunta_1b"]."\n\n";
$message .= "\tc. Comunicaciones previas clarificando y precisando el procedimiento a seguir para el desarrollo de la fecha de examen bajo la modalidad a distancia : ".$_POST["pregunta_1c"]."\n\n";
$message .= "\td. Cumplimiento en los tiempos del env�o de los materiales de examen : ".$_POST["pregunta_1d"]."\n\n";
$message .= "2. � Cu�l es su nivel de satisfacci�n en relaci�n a la atenci�n recibida por el equipo de organizaci�n durante la fecha de examen ?\n\n";
$message .= "\ta. Cordialidad y asistencia a los alumnos y acompa�antes del colegio : ".$_POST["pregunta_2a"]."\n\n";
$message .= "3. � Cu�l es su nivel de satisfacci�n en relaci�n a la atenci�n brindada por nuestros profesores ?\n\n";
$message .= "\ta. Atenci�n a los alumnos : ".$_POST["pregunta_3a"]."\n\n";
$message .= "\tb. Devoluci�n de los resultados : ".$_POST["pregunta_3b"]."\n\n";
$message .= "\tc. Asistencia previa a la fecha de examen en el foro : ".$_POST["pregunta_3c"]."\n\n";
$message .= "4. � Cu�l es su nivel de satisfacci�n en relaci�n al equipamiento de los laboratorios ?\n\n";
$message .= "\ta. Completar s�lo para las fechas de examen rendidas en la UTN-FRBA : ".$_POST["pregunta_4a"]."\n\n";
$message .= "Sugerencia : ".$_POST["pregunta_5a"]."\n\n";

email ("scorrales@sceu.frba.utn.edu.ar", "Encuesta", $message, "From : webserver@sceu.frba.utn.edu.ar");

echo '{"status":"ok"}';
?>