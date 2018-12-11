<?php
	require "../conexion.php";

	$despliega_gerencia="<option class='opcion2' value=0>Seleccione una opci&oacuten</option>";

	$id_nombre="SELECT g.id_gerencia, g.nombre_ger FROM gerencia g, puesto p
		WHERE g.habilitado=1 AND p.id_gerencia=g.id_gerencia GROUP BY g.nombre_ger";
	$inq=mysqli_query($con,$id_nombre)or die(mysqli_error());

	while($datos=mysqli_fetch_array($inq))
	{
		$despliega_gerencia=$despliega_gerencia."
			<option class='opcion2' value='".$datos[0]."'>".$datos[1]."</option>
		";
	}

	echo $despliega_gerencia;
?>
