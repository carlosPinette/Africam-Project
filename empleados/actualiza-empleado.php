<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$id=(string)$_GET["id"];
	$nomina=(string)$_GET["nomina"];
	$nombre=(string)$_GET["nombre"];
	$correo=(string)$_GET["correo"];
	$puesto=(string)$_GET["puesto"];
	$username=(string)$_GET["username"];
	$password=(string)$_GET["password"];

	$actualiza_empleado="UPDATE empleado 
		SET nomina='$nomina', nombre='$nombre', correo='$correo', id_puesto='$puesto', username='$username', password='$password' 
		WHERE id_empleado=$id";
	$aeq=mysqli_query($con,$actualiza_empleado)or die(mysqli_error());

	echo 1;
?>
