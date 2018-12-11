<?php
	require "muestra-gerencia-inhabilitada.php";
?>

	<body>
		<h1>Dar de Alta una Gerencia</h1>

		<label>Las gerencias que se dieron de baja se pueden dar de alta para poder volver a usarlas.</label>
		<br>
		
		<label>Seleccione la gerencia a dar de alta.</label>
		<br>
		<br>
		
		<label id="mensaje"></label>
		<br>

		<select id="id">
		<option value=0>Seleccione una opci&oacuten</option>
		<?php echo $despliega_gerencia; ?>
		</select>

		<button id="ingresar" onclick="alta_gerencia()">Restaurar</button>
	</body>
</html>
