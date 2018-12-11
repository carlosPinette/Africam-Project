<?php
	require "../conexion.php";

	$empleado="SELECT e.id_empleado, e.nomina, e.nombre, e.username, g.nombre_ger, p.nombre_puesto, e.correo
			FROM empleado e, puesto p, gerencia g 
			WHERE e.habilitado=0 AND e.privilegio=0 AND e.id_puesto=p.id_puesto AND p.id_gerencia=g.id_gerencia";
	$eq=mysqli_query($con,$empleado)or die(mysqli_error());
	$empleado_exist=mysqli_num_rows($eq);

	$despliega_empleado="";

	if($empleado_exist==0)
		$despliega_empleado="<label id='mensaje'>No existen empleados deshabilitados</label>";
	else
	{
		while($datos=mysqli_fetch_array($eq))
		{
			$despliega_empleado=$despliega_empleado."
				<div>
					<label><b>N&oacutemina:</b> ".$datos[1]."</label>
					<br>
					<label><b>Nombre:</b> ".$datos[2]."</label>
					<br>
					<label><b>Usuario:</b> ".$datos[3]."</label>
					<br>
					<label><b>Gerencia:</b> ".$datos[4]."</label>
					<br>
					<label><b>Puesto:</b> ".$datos[5]."</label>
					<br>
					<label><b>Correo:</b> ".$datos[6]."</label>
					<br>
					<button id='ingresar' onclick='alta_empleado(".$datos[0].")'>Restaurar</button>
					<br>
					<br>
				</div>
			";	
		}
	}	
?>

	<body>
		<h1>Dar de Alta a un Empleado</h1>

		<label>Se puede volver a habilitar un empleado dandolo de alta, aqu&iacute aparecen los empleados inhabilitados.</label>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>
		<br>
		<?php echo $despliega_empleado; ?>
	</body>
</html>
