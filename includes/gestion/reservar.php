<?php 
//Gestión de Colegios
// by Alex - date : 26-05-2008
// Modified : 07-08-2009
// alexjg@argentina.com

//error_reporting(0);

$id_colegio = $_POST['id_colegio'];

//$id_colegio = '47';

$conn = mysql_connect("localhost", "dav_web", "UserwebDav08");

$db = mysql_select_db("dav_gestion", $conn);

$fecha_actualizado = mysql_fetch_array(mysql_query ("SELECT UltimaActualizacion FROM WEBParametros"));

$sql = "SELECT FechaReserva, Lugar, CupoMin, CupoMax, Grupo FROM WEBReservas where idcolegio = '".$id_colegio."' ORDER BY FechaReserva ASC ";

$result = mysql_query( $sql );

function format_date($fecha){
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
} 

?>
<h2>Reservar Fecha</h2>
<h3>Nueva Reserva</h3>
<p>Desde aquí podrá descargar la planilla de Solicitud de Reserva, para iniciar de esta manera el proceso de reserva de fecha de examen.</p>
<p>Haga <a href="docs/UTN.BA Solicitud de Reserva de Fecha de Examen.xls">click aquí</a> para descargar la planilla de Solicitud de Reserva.<br/>
Una vez completada con los datos solicitados deben enviarla por mail a la siguiente dirección : <a href="mailto:dav@sceu.frba.utn.edu.ar">dav@sceu.frba.utn.edu.ar</a></p>
<h3>Importante</h3>
<p>A medida que avanza el año es posible que la cantidad de exámenes estimada por el colegio en la planilla de Solicitud de reserva se sitúe fuera del intervalo de vacantes reservadas por la universidad. En este caso, deberán comunicarse con la UTN-FRBA para informar de esta situación. Ante la misma, la universidad podrá proponer al colegio reconvenir su fecha de examen de forma tal de poder satisfacer los nuevos requerimientos. En esta situación es importante que el colegio reconfirme su fecha de examen con la mayor antelación posible, de forma tal de no tener que asimilar cambios a último momento.</p>
<h3>Listado de Reservas del Colegio :</h3>
<p>Actualizado al: <?php echo format_date($fecha_actualizado[0]); ?></p>
<table class="listado_reservas">
	<thead>
		<tr>
			<th rowspan="2">Fecha</th>
			<th rowspan="2">Lugar</th>
			<th colspan="2">Cupo Exámnes</th>
			<th rowspan="2">Aplicaciones</th>
		</tr>
		<tr>
			<th class="fin">Mínimo</th>
			<th class="fin">Máximo</th>
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
			<td><?php echo $myrow[4]; ?></td>
		</tr>

		<!-- <td><?php echo  utf8_encode($myrow[1]); ?></td> -->
		<?php
		}// while
		mysql_close($conn);
		?>
	</tbody>
</table>