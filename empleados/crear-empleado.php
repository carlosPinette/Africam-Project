<script>
	$(document).ready(function()
	{
		mostrar_gerencia();
	});
</script>	
	<body>
		<h1>Crear un Empleado</h1>

		<label id="mensaje"></label>
		<br>
		<br>

		<li><label>Ingrese los datos b&aacutesicos del empleado.</label></li>
		<br>
		
		<label>N&oacutemina:</label>
		<input id="nomina" type="text" onblur="verifica_nomina()"></input>
		<br>
		<br>
			
		<label>Nombre:</label>
		<input id="nombre" type="text"></input>
		<br>
		<br>
		
		<label>Correo:</label>
		<input id="correo" type="email"></input>
		<br>
		<br>

		<br>

		<li><label>Seleccione la <b>Gerencia</b> a la que pertenece y el <b>Puesto</b> que desempe&ntildea.</label></li>
		<br>

		<label>Gerencia:</label>
		<select  id="gerencia" onchange="muestra_puesto2()">
		</select>
		<br>
		<br>

		<label>Puesto:</label>
		<select id="puesto">
		<option value=0>Seleccione un puesto</option>
		</select>
		<br>
		<br>

		<br>

		<li><label>Ingrese un <b>Usuario</b> y <b>Contrase&ntildea</b> para que el empleado pueda acceder al sistema
		<br>
		(Estos datos pueden ser modificados posteriormente por el administrador o el empleado).</label></li>
		<br>

		<label>Usuario:</label>
		<input id="username" type="text" onblur="verifica_usuario()"></input>
		<br>
		<br>

		<label>Contrase&ntildea:</label>
		<input id="password" type="password"></input>
		<br>
		<br>

		<button id="ingresar" onclick="crear_empleado()">Ingresar</button>
	</body>
</html>
