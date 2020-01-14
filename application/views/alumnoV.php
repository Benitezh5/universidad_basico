
<body>

	<center>
		<form method="POST" action="<?= base_url("alumnoC/ingresar")?>" onsubmit="return validaralumno()" >
			<!-- <input type="hidden" name="id_alumno" id="id"> -->
			<td>Nombre</td>
			<input type="text" name="nombre" id="nombre">
			<br>
			<br>
			<td>Apellido</td>
			<input type="text" name="apellido" id="apellido">
			<br>
			<br>
			<td>Edad</td>
			<input type="number" name="edad" id="edad">
			<br>
			<br>
			<td>Sexo</td>
			<select name="sexo" id="sexo">
				<option value="">--Seleccione Sexo--</option>
				<?php foreach($sexo as $s) {?>
					<option value="<?php echo($s->id_sexo)?>"><?php echo($s->nombre_sexo)?></option>
				<?php } ?>
			</select>
			<br>
			<br>
			<td>Carrera</td>
			<select name="carrera" id="carrera">
				<option value="">--Seleccione Carrera--</option>

				<?php foreach($carrera as $c) {?>
					<option value="<?php echo($c->id_carrera)?>"><?php echo($c->nombre_carrera)?></option>
				<?php } ?>
			</select>
			<br>
			<br>
			<td>Ciudad</td>
			<select name="ciudad" id="ciudad">
				<option value="">--Seleccione Ciudad--</option>

				<?php foreach($ciudad as $ci) {?>
					<option value="<?php echo($ci->id_ciudad)?>"><?php echo($ci->nombre_ciudad)?></option>
				<?php } ?>
			</select>
			<br>
			<br>
			<input type="submit" value="Guardar" class="btn btn-success">

			<br>
		</form>
		<br>
	</center>


	<table border="2" class="table table-dark">
		<tr>
			<td>N°</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Edad</td>
			<td>Sexo</td>
			<td>Carrera</td>
			<td>Ciudad</td>
			<td>Eliminar</td>
			<td>Editar</td>

		</tr>
		
		<?php foreach($alumno as $a) { ?>
			<tr>
				<td><?=$a->id_alumno?></td>
				<td><?=$a->nombre?></td>
				<td><?=$a->apellido?></td>
				<td><?=$a->edad?></td>
				<td><?=$a->nombre_sexo?></td>
				<td><?=$a->nombre_carrera?></td>
				<td><?=$a->nombre_ciudad?></td>
				<td><a href="<?= base_url("alumnoC/eliminar/".$a->id_alumno)?>"class="btn btn-danger" onclick="return confirm('Seguro que desea Eliminar?')">Eliminar</a></td>
				<td><a href="<?= base_url("alumnoC/get_datos/".$a->id_alumno)?>"class="btn btn-info">Editar</a></td>
			</tr>
		<?php } ?>
		


	</table>







