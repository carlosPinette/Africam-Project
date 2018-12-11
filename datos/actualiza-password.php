<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$id=$_SESSION["empleado-id"];
	$password=(string)$_GET["password"];

	$actualiza_password="UPDATE empleado SET password='$password' WHERE id_empleado=$id";
	$apq=mysqli_query($con,$actualiza_password)or die(mysqli_error());

	echo 1;
?>
