<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	

	require "../conexion.php";

	$id=$_GET["id"];
		
	$actualiza_gerencia="UPDATE gerencia SET habilitado=1 WHERE id_gerencia=$id";
	$agq=mysqli_query($con,$actualiza_gerencia)or die(mysqli_error());

	echo 1;
?>
