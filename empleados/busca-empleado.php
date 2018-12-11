<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");

	require "../conexion.php";

	$b=$_GET["b"];

	if($b!='todos')
	{
		$busqueda="SELECT e.id_empleado, e.nomina, e.nombre, e.username, g.nombre_ger, p.nombre_puesto, e.correo
			FROM empleado e, puesto p, gerencia g
			WHERE e.habilitado=1 AND e.privilegio=0 AND (e.nomina LIKE '%$b%' OR e.nombre LIKE '%$b%' ) 
				AND e.id_puesto=p.id_puesto AND p.id_gerencia=g.id_gerencia";
		$bq=mysqli_query($con,$busqueda)or die(mysqli_error());
		$empleado_exist=mysqli_num_rows($bq);
	}
	else
	{
		$busqueda="SELECT e.id_empleado, e.nomina, e.nombre, e.username, g.nombre_ger, p.nombre_puesto, e.correo
			FROM empleado e, puesto p, gerencia g
			WHERE e.habilitado=1 AND e.privilegio=0 AND e.id_puesto=p.id_puesto AND p.id_gerencia=g.id_gerencia";
		$bq=mysqli_query($con,$busqueda)or die(mysqli_error());
		$empleado_exist=mysqli_num_rows($bq);
	}

	if($empleado_exist==0)
		echo "<label id='mensaje'>No se encontraron resultados</label>";
	else
	{
		$mensaje="";

		while($datos=mysqli_fetch_array($bq))
		{
			$mensaje=$mensaje."
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
					<button id='ingresar' onclick='cambiar(".$datos[0].")'>Cambiar</button>
					<br>
					<br>
				</div>
			";	
		}

		echo $mensaje;
	}	
?>
