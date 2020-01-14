<body>

	<center>
		<?php foreach($alumno as $a) { ?>
		<form method="POST" action="<?= base_url("alumnoC/actualizar")?>" onsubmit="return validaralumno()" >
			- <input type="hidden" name="id_alumno" value="<?= $a->id_alumno?>"> 
			<td>Nombre</td>
			<input type="text" name="nombre" id="nombre" value="<?= $a->nombre?>">
			<br>
			<br>
			<td>Apellido</td>
			<input type="text" name="apellido" id="apellido" value="<?= $a->apellido?>">
			<br>
			<br>
			<td>Edad</td>
			<input type="number" name="edad" id="edad" value="<?= $a->edad?>">
			<br>
			<br>
			<td>Sexo</td>
			<select name="sexo" id="sexo">
				<option value="">--Seleccione Sexo--</option>
				<?php foreach($sexo as $s) {?>
					<option value="<?php echo($s->id_sexo)?>"<?php if($s->id_sexo==$a->id_sexo) {echo "selected";}?>><?php echo($s->nombre_sexo)?></option>
				<?php } ?>
			</select>
			<br>
			<br>
			<td>Carrera</td>
			<select name="carrera" id="carrera">
				<option value="">--Seleccione Carrera--</option>

				<?php foreach($carrera as $c) {?>
					<option value="<?php echo($c->id_carrera)?>"<?php if($c->id_carrera==$a->id_carrera) {echo "selected";}?>><?php echo($c->nombre_carrera)?></option>
				<?php } ?>
			</select>
			<br>
			<br>
			<td>Ciudad</td>
			<select name="ciudad" id="ciudad">
				<option value="">--Seleccione Ciudad--</option>

				<?php foreach($ciudad as $ci) {?>
					<option value="<?php echo($ci->id_ciudad)?>"<?php if($ci->id_ciudad==$a->id_ciudad) {echo "selected";}?>><?php echo($ci->nombre_ciudad)?></option>
				<?php } ?>
			</select>
			<br>
			<br>
			<input type="submit" value="actualizar" class="btn btn-success">

			<br>
		</form>
		<br>
	<?php } ?>
	</center>