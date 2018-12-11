<?php
	require "muestra-gerencia.php";
?>

	<body>
		<h1>Dar de Baja una Gerencia</h1>

		<label>Las gerencias no se eliminan, en lugar de eso se dan de baja, de tal manera que se inhabilita su uso.</label>
		<br>
		
		<label>Seleccione la gerencia a dar de baja.</label>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>

		<select id="id">
		<option value=0>Seleccione una opci&oacuten</option>
		<?php echo $despliega_gerencia; ?>
		</select>

		<button onclick="baja_gerencia()">Seleccionar</button>
	</body>
</html>
