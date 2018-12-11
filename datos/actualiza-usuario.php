<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$id=$_SESSION["empleado-id"];
	$username=(string)$_GET["username"];

	$actualiza_usuario="UPDATE empleado SET username='$username' WHERE id_empleado=$id";
	$auq=mysqli_query($con,$actualiza_usuario)or die(mysqli_error());

	echo 1;
?>
