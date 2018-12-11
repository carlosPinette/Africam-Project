<?php
	require "../gerencias/muestra-gerencia.php";
?>
	<body>
		<h1>Dar de Baja un Puesto</h1>

		<label>Los puestos no se eliminan, en lugar de eso se dan de baja, de tal manera que se inhabilita su uso.</label>
		<br>

		<label>Seleccione una gerencia para desplegar los puestos existentes, despu&eacutes seleccione el puesto a dar de baja.</lable>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>

		<select id="gerencia" onchange="muestra_puesto()">
		<option value=0>Seleccione una opci&oacuten</option>
		<?php echo $despliega_gerencia; ?>
		</select>
		<br>
		<br>

		<select hidden="true" id="puesto" onchange="muestra_ingreso()">
		<option value=0>Seleccione una opci&oacuten</option>
		</select>
			
		<button hidden="true" id="ingresar" onclick="baja_puesto()">Seleccionar</button>
	</body>
</html>
