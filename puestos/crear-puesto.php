<?php
	require "../gerencias/muestra-gerencia.php";
?>
	<body>
		<h1>Crear un Puesto</h1>

		<label>Los puestos se asignan a una gerencia. Seleccione una gerencia y escriba el nombre del nuevo puesto a crear.</label>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>
		<br>

		<select id="gerencia">
		<option value=0>Selecciona una gerencia</option>
		<?php echo $despliega_gerencia; ?>
		</select>
		<br>
		<br>

		<input id="puesto" type="text"></input>
		<button id="ingresar" onclick="crear_puesto()">Crear</button>
	</body>
</html>
