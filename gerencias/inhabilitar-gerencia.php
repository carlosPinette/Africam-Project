<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	

	require "../conexion.php";

	$id=$_GET["id"];

	$verifica_gerencia_asignada="SELECT id_puesto FROM puesto WHERE habilitado=1 AND id_gerencia=$id";
	$vgaq=mysqli_query($con,$verifica_gerencia_asignada)or die(mysqli_error());
	$puesto_exist=mysqli_fetch_row($vgaq);

	if($puesto_exist==0)
	{		
		$actualiza_gerencia="UPDATE gerencia SET habilitado=0 WHERE id_gerencia=$id";
		$agq=mysqli_query($con,$actualiza_gerencia)or die(mysqli_error());

		echo 1;
	}
	else
		echo 0;
?>
