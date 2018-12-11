<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	

	require "../conexion.php";

	$id=$_GET["id"];

	$actualiza_empleado="UPDATE empleado SET habilitado=1 WHERE id_empleado=$id";
	$aeq=mysqli_query($con,$actualiza_empleado)or die(mysqli_error());

	echo 1;
?>
