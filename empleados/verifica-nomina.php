<?php
	require "../conexion.php";

	$nomina=$_GET["nomina"];

	$verifica_nomina="SELECT id_empleado FROM empleado WHERE nomina='$nomina'";
	$vnq=mysqli_query($con,$verifica_nomina)or die(mysqli_error());
	$nomina_exist=mysqli_num_rows($vnq);

	if($nomina_exist==0)
		echo 1;
	else
		echo 0;
?>

