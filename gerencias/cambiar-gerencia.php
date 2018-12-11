<?php
	require "muestra-gerencia.php";
?>	
	<body>
		<h1>Cambiar una Gerencia</h1>

		<label>Seleccione la gerencia que desea cambiar, aparecer&aacute en el cuadro para que pueda editar su nombre.</label>
		<br>
		<br>
			
		<label id="mensaje"></label>
		<br>

		<select id="seleccionar" name="id" onchange="selecciona_gerencia()">
		<option value=0>Seleccione una opci&oacuten</option>
		<?php echo $despliega_gerencia; ?>
		</select>
		<br>
		<br>
		
		<input hidden="true" id="gerencia" type="text"></input>
		<button hidden="true" id="ingresar" onclick="cambiar_gerencia()">Cambiar</button>
	</body>
</html>

