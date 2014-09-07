<?php 
//Gestión de Colegios
// by Alex - date : 26-05-2008
// Modified : 07-08-2009
// alexjg@argentina.com

//$usuario = $_POST(usuario);
$id_colegio = $_POST['id_colegio'];

//$id_colegio = '47';

$conn = mysql_connect("localhost", "dav_web", "UserwebDav08");
$db = mysql_select_db("dav_gestion", $conn);

$fecha_actualizado = mysql_fetch_array(mysql_query ( "SELECT UltimaActualizacion FROM WEBParametros" ));

$sql = "SELECT FechaReserva, Horario, Organizador, Docentes FROM WEBReservas where idcolegio = '".$id_colegio."'  ORDER BY FechaReserva ASC ";

$result = mysql_query( $sql );

function format_date($fecha){
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
} 

?>
<h2>Organización horaria</h2>
<h3>Organización de las Fechas de Examen</h3>
<p>Aquí podrá confirmar los horarios pautados para la fecha de examen, la organización en lo que respecta a los turnos y los docentes que tomarán los exámenes al colegio.</p>
<p>Actualizado al :	<?php echo format_date($fecha_actualizado[0]); ?></p>

<table class="listado_reservas">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Horario</th>
			<th>Organización</th>
			<th>Docente</th>
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