<?php 
//Gestión de Colegios
// by Alex - date : 26-05-2008
// Modified : 07-08-2009
// alexjg@argentina.com

//$usuario = $_POST(usuario);
$id_colegio = $_POST['id_colegio'];

//$id_colegio = '47';

require ('xajax/xajax_core/xajax.inc.php');

$conn = mysql_connect("localhost", "dav_web", "UserwebDav08");
$db = mysql_select_db("dav_gestion", $conn);

$fecha_actualizado = mysql_fetch_array(mysql_query ( "SELECT UltimaActualizacion FROM WEBParametros"));

//$sql = "SELECT FechaReserva, Planilla, Pago, Normativa, Certificados FROM WEBReservas where idcolegio = '".$id_colegio."' ORDER BY FechaReserva ASC";
$sql = "SELECT FechaReserva, Planilla, Pago, Normativa FROM WEBReservas where idcolegio = '".$id_colegio."' ORDER BY FechaReserva ASC";
$result = mysql_query( $sql );

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
<?php $xajax->printJavascript("xajax/"); ?>
<h2>Enviar Documentación</h2>
<h3>Documentación para la Fecha de Examen</h3>
<p>Desde aquí podrá descargar toda la documentación necesaria para la fecha de examen.</p>
<a class="descargar" href="docs/UTN.BA Planilla Alumnos.xls">Planilla Inscripción Alumnos</a>
<a class="descargar" href="docs/UTN-FRBA Procedimiento Pago.doc">Procedimiento Pago</a>
<a class="descargar" href="docs/UTN-FRBA _Normativas.doc">Normativas</a>
<p>También deberán dejar constancia, una única vez en el año, de que han tomado conocimiento de las normativas de la UTN-FRBA</p>
<form action="" method="" class="" >
		<p><input type="checkbox" name="si" value="1" onclick="javascript: xajax_si_no(document.formulario.si.checked, <?php echo $id_colegio ?>)" /> A través del presente, confirmo que el colegio está notificado de las Pautas y Procedimientos establecidos por la UTN-FRBA para proceder con la Certificación de los conocimientos de Informática de loa alumnos del colegio participantes del Programa Digital Junior. De igual modo asiento que el colegio establecerá la forma para notificar a los alumnos participantes, sobre las consideraciones manifiestas en el mencionado procedimiento.</p>
</form>


<p>Actualizado al :	<?php echo format_date($fecha_actualizado[0]); ?></p>

<table class="listado_reservas">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Planilla</th>
			<th>Pago</th>
			<th>Normativas</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while ($myrow = mysql_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $myrow[0]; ?></td>
			<td><?php echo $myrow[1]; ?></td>
			<td><?php echo $myrow[2]; ?></td>
			<td><?php echo $myrow[3]; ?></td>
		</tr>
		<?php
		}// while
		mysql_close($conn);
		?>
	</tbody>
	
</table>

<h3>Estado del Pago:</h3>
<p>El pago se encuentra en estado <strong>“Verificado”</strong>cuando se ha corroborado el pago de las matrículas y los derechos de examen de todos los alumnos que rendirán en la fecha.</p>
<p>En forma análoga, el estado <strong> “Sin Verificar” </strong>no implica que el colegio no haya realizado pagos parciales relativos a la fecha de examen (Ej. Pago en concepto de matrículas), sino que no se ha verificado el pago total.</p>
<script type="text/javascript">
   xajax_si_no(document.formulario.si.checked, <?php echo $id_colegio ?>); //Llamando inicialmente a la función xajax_si_no inicializamos el valor de la capa con la respuesta
   <?php

   $db_conn = mysql_connect("localhost", "dav_web", "UserwebDav08");
   $db = mysql_select_db("dav_gestion", $db_conn);
   $result = mysql_query("Select colegioid, acepto from controlnormativas where colegioid = '".$id_colegio."'");
   $ok_result = mysql_num_rows($result);
   $data_result = mysql_fetch_row($result);
   //echo "alert('Mysql Select<br />".$id_colegio."');";
   if ($ok_result == '1' && $data_result[1] == 'Si'){
	   echo "document.formulario.si.checked=true;document.formulario.si.disabled=true;";
   }
	mysql_close($db_conn);
	?>
</script>