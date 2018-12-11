<?php
	require "../conexion.php";

	$id=(string)$_GET["id"];

	$empleado="SELECT * FROM empleado WHERE habilitado=1 AND privilegio=0 AND id_empleado=$id";
	$eq=mysqli_query($con,$empleado)or die(mysqli_error());
	$datos=mysqli_fetch_array($eq);

	$gerencia_puesto="SELECT g.id_gerencia, g.nombre_ger, p.id_puesto, p.nombre_puesto 
			FROM gerencia g, puesto p WHERE p.id_puesto=".$datos[7]." AND p.id_gerencia=g.id_gerencia";
	$gpq=mysqli_query($con,$gerencia_puesto)or die(mysqli_error());
	$despliega_gerencia_puesto=mysqli_fetch_array($gpq);

	$mensaje="
		<input id='id' type='hidden' value='$id'></input>

		<label>N&oacutemina: </label>
		<input id='nomina' type='text' value='".$datos[1]."' onblur='verifica_nomina()'></input>
		<br>
		<br>

		<label>Nombre: </label>
		<input id='nombre' type='text' value='".$datos[2]."'></input>
		<br>
		<br>

		<label>Correo: </label>
		<input id='correo' type='email' value='".$datos[3]."'></input>
		<br>
		<br>

		<label>Gerencia: </label>
		<select id='gerencia' onchange='muestra_puesto2()'>
		<option id='seleccion' value='".$despliega_gerencia_puesto[0]."'>".$despliega_gerencia_puesto[1]."</option>
		</select>
		<br>
		<br>

		<label>Puesto: </label>
		<select id='puesto'>
		<option id='seleccion' value='".$despliega_gerencia_puesto[2]."'>".$despliega_gerencia_puesto[3]."</option>
		</select>
		<button id='cambiar' onclick='cambiar_gerencia_puesto()'>Cambiar</button>
		<br>
		<br>

		<label>Usuario: </label>
		<input id='username' type='text' value='".$datos[4]."' onblur='verifica_usuario()'></input>
		<br>
		<br>

		<label>Contrase&ntildea: </label>
		<input id='password' type='password' value='".$datos[5]."'></input>
		<br>
		<br>
	";
?>
	<body>
		<h1>Cambiar un Empleado</h1>

		<label>Cambie los datos del empleado.</label>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>
		<br>

		<?php echo $mensaje; ?>

		<button id="ingresar" onclick="cambiar_empleado()">Cambiar</button>
		<br>
		<br>

		<label>Los empleados no se eliminan, en lugar de eso se dan de baja, de tal manera que se inhabilita su uso. </label>
		<br>
		<button id="ingresar" onclick="baja_empleado()">Dar de baja</button>
	</body>
</html>
