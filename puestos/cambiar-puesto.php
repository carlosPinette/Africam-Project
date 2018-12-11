<?php
	require "../gerencias/muestra-gerencia.php";	
?>		
	<body>
		<h1>Cambiar un Puesto</h1>
		
		<label>Seleccione una gerencia para desplegar los puestos existentes.</lable>
		<br>

		<label>Seleccione el puesto que desea cambiar, aparecer&aacute en el cuadro para que pueda cambiar su nombre.</label>
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

		<select hidden="true" id="puesto" onchange="selecciona_puesto()">
		<option value=0>Seleccione una opci&oacuten</option>
		</select>
		<br>
		<br>
		
		<input hidden="true" id="seleccion" type="text" name="puesto"></input>
		<button hidden="true" id="ingresar" onclick="cambiar_puesto()">Cambiar</button>
	</body>
</html>

