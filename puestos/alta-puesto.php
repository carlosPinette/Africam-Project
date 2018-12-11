<?php
	require "../gerencias/muestra-gerencia.php";
?>
	<body>
		<h1>Dar de Alta un Puesto</h1>

		<label>Los puestos que se dieron de baja se pueden dar de alta para poder volver a usarlos.</label>
		<br>

		<label>Seleccione una gerencia para desplegar los puestos dados de baja, despu&eacutes seleccione el puesto a dar de alta.</lable>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>

		<select id="gerencia" onchange="muestra_puesto_inhabilitado()">
		<option value=0>Seleccione una opci&oacuten</option>
		<?php echo $despliega_gerencia; ?>
		</select>
		<br>
		<br>

		<select hidden="true" id="puesto" onchange="muestra_ingreso()">
		<option value=0>Seleccione una opci&oacuten</option>
		</select>
			
		<button hidden="true" id="ingresar" onclick="alta_puesto()">Restaurar</button>
	</body>
</html>
