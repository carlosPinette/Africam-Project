<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	

	require "../conexion.php";

	$gerencia=$_GET["gerencia"]; 

	$id_nombre="SELECT id_puesto, nombre_puesto FROM puesto WHERE id_gerencia='$gerencia' AND habilitado=1";
	$inq=mysqli_query($con,$id_nombre)or die(mysqli_error());

	$despliega_puesto="";

	while($datos=mysqli_fetch_array($inq))
	{
		$despliega_puesto=$despliega_puesto."
			<option class='opcion' value='".$datos[0]."'>".$datos[1]."</option>
		";
	}

	echo $despliega_puesto;
?>
