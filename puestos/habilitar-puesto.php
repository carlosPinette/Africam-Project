<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");

	require "../conexion.php";

	$gerencia=$_GET["gerencia"];
	$id=$_GET["id"];

	$actualiza_puesto="UPDATE puesto SET habilitado=1 WHERE id_puesto='$id' AND id_gerencia='$gerencia'";
	$apq=mysqli_query($con,$actualiza_puesto)or die(mysqli_error());

	echo 1
?>
