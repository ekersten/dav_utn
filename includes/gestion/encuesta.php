<h2>Encuesta</h2>
<h3>Opinión</h3>
<p></p>
<p></p>
<form action="send_data.php" method="post" class="form-encuesta">
	<div class="row">
		<div class="column medium-6">
			<p>
				<label class="required">Nombre del colegio</label>
				<input type="text" name="colegio" value="" required />
			</p>
			<p>
				<label class="required">Provincia</label>
				<input type="text" name="provincia" value="" required />
			</p>

		</div>
		<div class="column medium-6">
			<p>
				<label class="required">Localidad / Ciudad :</label>
				<input type="text" name="localidad" value="" required />
			</p>
			<p>
				<label class="required">Completa el cuestionario:</label>
				<input type="text" name="nombre" value="" required />
				<span class="bajada">(Nombre, Apellido, Cargo)</span>
			</p>
		</div>
	</div>
<p>* Los campos consignados son obligatorios, con el fin de poder contactarlos y hacerles una devolución.</p>
<p>CONTESTE LAS PREGUNTAS SELECCIONANDO EL CASILLERO QUE REPRESENTE SU OPINION, DE ACUERDO A LAS SIGUIENTES VALORACIONES :</p>
<p><strong> 1</strong> No Satisfactorio | <strong>2</strong> Regular | <strong>3</strong> Satisfactorio |<strong> 4</strong> Muy satisfactorio</p>

<h4>1. ¿ Cuál es el nivel de satisfacción en relación a la organización de la fecha de examen ?</h4>
<p><strong> a.</strong> Comunicaciones previas en relación a la asignación de fecha, horario de examen y documentación a remitir por el colegio.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_1a" id="pregunta_1a1" value="No Satisfactorio" />
		<label for="pregunta_1a1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1a" id="pregunta_1a2" value="Regular" />
		<label for="pregunta_1a2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1a" id="pregunta_1a3" value="Satisfactorio" />
		<label for="pregunta_1a3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1a" id="pregunta_1a4" value="Muy satisfactorio" />
		<label for="pregunta_1a4">4</label>
	</li>
</ul>

<p><strong> b.</strong> Cumplimiento en relación a los horarios pautados.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_1b" id="pregunta_1b1" value="No Satisfactorio" />
		<label for="pregunta_1b1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1b" id="pregunta_1b2" value="Regular" />
		<label for="pregunta_1b2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1b" id="pregunta_1b3" value="Satisfactorio" />
		<label for="pregunta_1b3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1b" id="pregunta_1b4" value="Muy satisfactorio" />
		<label for="pregunta_1b4">4</label>
	</li>
</ul>
<p>En caso de haber rendido bajo la modalidad a distancia, complete también :</p>

<p><strong> c.</strong> Comunicaciones previas clarificando y precisando el procedimiento a seguir para el desarrollo de la fecha de examen bajo la modalidad a distancia.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_1c" id="pregunta_1c1" value="No Satisfactorio" />
		<label for="pregunta_1c1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1c" id="pregunta_1c2" value="Regular" />
		<label for="pregunta_1c2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1c" id="pregunta_1c3" value="Satisfactorio" />
		<label for="pregunta_1c3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1c" id="pregunta_1c4" value="Muy satisfactorio" />
		<label for="pregunta_1c4">4</label>
	</li>
</ul>

<p><strong> d.</strong> Cumplimiento en los tiempos del envío de los materiales de examen.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_1d" id="pregunta_1d1" value="No Satisfactorio" />
		<label for="pregunta_1d1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1d" id="pregunta_1d2" value="Regular" />
		<label for="pregunta_1d2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1d" id="pregunta_1d3" value="Satisfactorio" />
		<label for="pregunta_1d3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_1d" id="pregunta_1d4" value="Muy satisfactorio" />
		<label for="pregunta_1d4">4</label>
	</li>
</ul>

<h4>2.  ¿ Cuál es su nivel de satisfacción en relación a la atención recibida por el equipo de organización durante la fecha de examen ?</h4>
<p><strong> a.</strong> Cordialidad y asistencia a los alumnos y acompañantes del colegio.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_2a" id="pregunta_2a1" value="No Satisfactorio" />
		<label for="pregunta_2a1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_2a" id="pregunta_2a2" value="Regular" />
		<label for="pregunta_2a2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_2a" id="pregunta_2a3" value="Satisfactorio" />
		<label for="pregunta_2a3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_2a" id="pregunta_2a4" value="Muy satisfactorio" />
		<label for="pregunta_2a4">4</label>
	</li>
</ul>

<h4>3. ¿ Cuál es su nivel de satisfacción en relación a la atención brindada por nuestros profesores ?</h4>
<p><strong> a.</strong> Atención a los alumnos.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_3a" id="pregunta_3a1" value="No Satisfactorio" />
		<label for="pregunta_3a1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3a" id="pregunta_3a2" value="Regular" />
		<label for="pregunta_3a2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3a" id="pregunta_3a3" value="Satisfactorio" />
		<label for="pregunta_3a3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3a" id="pregunta_3a4" value="Muy satisfactorio" />
		<label for="pregunta_3a4">4</label>
	</li>
</ul>

<p><strong> b.</strong> Devolución de los resultados.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_3b" id="pregunta_3b1" value="No Satisfactorio" />
		<label for="pregunta_3b1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3b" id="pregunta_3b2" value="Regular" />
		<label for="pregunta_3b2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3b" id="pregunta_3b3" value="Satisfactorio" />
		<label for="pregunta_3b3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3b" id="pregunta_3b4" value="Muy satisfactorio" />
		<label for="pregunta_3b4">4</label>
	</li>
</ul>
<p>En caso de haber rendido bajo la modalidad a distancia, conteste también:</p>

<p><strong> c.</strong> Asistencia previa a la fecha de examen en el foro.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_3c" id="pregunta_3c1" value="No Satisfactorio" />
		<label for="pregunta_3c1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3c" id="pregunta_3c2" value="Regular" />
		<label for="pregunta_3c2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3c" id="pregunta_3c3" value="Satisfactorio" />
		<label for="pregunta_3c3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_3c" id="pregunta_3c4" value="Muy satisfactorio" />
		<label for="pregunta_3c4">4</label>
	</li>
</ul>

<h4>4. ¿ Cuál es su nivel de satisfacción en relación al equipamiento de los laboratorios ?</h4>
<p>Completar sólo para las fechas de examen rendidas en la UTN-FRBA.</p>
<ul class="opciones">
	<li>
		<input type="radio" name="pregunta_4a" id="pregunta_4a1" value="No Satisfactorio" />
		<label for="pregunta_4a1">1</label>
	</li>
	<li>
		<input type="radio" name="pregunta_4a" id="pregunta_4a2" value="Regular" />
		<label for="pregunta_4a2">2</label>
	</li>
	<li>
		<input type="radio" name="pregunta_4a" id="pregunta_4a3" value="Satisfactorio" />
		<label for="pregunta_4a3">3</label>
	</li>
	<li>
		<input type="radio" name="pregunta_4a" id="pregunta_4a4" value="Muy satisfactorio" />
		<label for="pregunta_4a4">4</label>
	</li>
</ul>

<h4>5. A continuación déjenos sus comentarios y/o sugerencias :</h4>
<textarea name="pregunta_5a" rows="5"></textarea>

<p><input class="descargar" type="submit" name="" value="Enviar Encuesta"> </p>
</form>