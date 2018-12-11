<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	

	require "../conexion.php";

	$gerencia=$_GET["gerencia"];
	$id=$_GET["id"];
		
	$verifica_puesto_asignado="SELECT id_empleado FROM empleado WHERE habilitado=1 AND id_puesto=$id";
	$vpaq=mysqli_query($con,$verifica_puesto_asignado)or die(mysqli_error());
	$puesto_exist=mysqli_fetch_row($vpaq);

	if($puesto_exist==0)
	{
		$actualiza_puesto="UPDATE puesto SET habilitado=0 WHERE id_puesto='$id' AND id_gerencia='$gerencia'";
		$aq=mysqli_query($con,$actualiza_puesto)or die(mysqli_error());

		echo 1;
	}
	else
		echo 0;
?>
