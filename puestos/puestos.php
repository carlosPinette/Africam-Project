<?php
	require "../conexion.php";

	$gerencia="SELECT id_gerencia, nombre_ger FROM gerencia WHERE habilitado=1";
	$gq=mysqli_query($con,$gerencia)or die(mysqli_error());

	$despliega_habilitado="";

	while($datos=mysqli_fetch_array($gq))
	{
		$despliega_habilitado=$despliega_habilitado."<li>".$datos[1]."<ul>";
		
		$puesto="SELECT id_puesto, nombre_puesto FROM puesto WHERE habilitado=1 AND id_gerencia=".$datos[0];
		$pq=mysqli_query($con,$puesto)or die(mysqli_error());


		while($datos1=mysqli_fetch_array($pq))
		{
			$empleado="SELECT id_empleado FROM empleado WHERE habilitado=1 AND id_puesto=".$datos1[0];
			$eq=mysqli_query($con,$empleado)or die(mysqli_error());	
			$asignado=mysqli_num_rows($eq);		

			if($asignado==0)
			{
				$despliega_habilitado=$despliega_habilitado."<li>".$datos1[1];
			}
			else
				$despliega_habilitado=$despliega_habilitado."<li>".$datos1[1]." (Asignado)";
		}

		$despliega_habilitado=$despliega_habilitado."</ul>";		
	}

	$inhabilitado="SELECT g.nombre_ger, p.nombre_puesto FROM puesto p, gerencia g WHERE p.habilitado=0 AND p.id_gerencia=g.id_gerencia";
	$iq=mysqli_query($con,$inhabilitado)or die(mysqli_error());

	$despliega_inhabilitado="";
	
	while($datos2=mysqli_fetch_array($iq))
	{
		$despliega_inhabilitado=$despliega_inhabilitado."
			<li>".$datos2[0]." - ".$datos2[1];
	}
?>
	<body>
		<h1>Administraci&oacuten de Puestos</h1>

		<label>Puestos <b>habilitados</b> por gerencia: </label>
		<br>
		<br>
		<?php echo $despliega_habilitado; ?>
		<br>
		<br>

		<label>Puestos <b>inhabilitados:</b> </label>
		<?php echo $despliega_inhabilitado; ?>
		<br>
		<br>
	</body>
</html>
