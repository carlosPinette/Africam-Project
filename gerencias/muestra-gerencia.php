<?php
	require "../conexion.php";

	$despliega_gerencia="";

	$id_nombre="SELECT id_gerencia, nombre_ger FROM gerencia WHERE habilitado=1";
	$inq=mysqli_query($con,$id_nombre)or die(mysqli_error());

	while($datos=mysqli_fetch_array($inq))
	{
		$despliega_gerencia=$despliega_gerencia."
			<option value='".$datos[0]."'>".$datos[1]."</option>
		";
	}
?>
