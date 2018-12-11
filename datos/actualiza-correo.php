<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$id=$_SESSION["empleado-id"];
	$correo=(string)$_GET["correo"];

	$actualiza_correo="UPDATE empleado SET correo='$correo' WHERE id_empleado=$id";
	$acq=mysqli_query($con,$actualiza_correo)or die(mysqli_error());

	echo 1;
?>
