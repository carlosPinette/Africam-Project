<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";	

	$nomina=(string)$_GET["nomina"];
	$nombre=(string)$_GET["nombre"];
	$correo=(string)$_GET["correo"];
	$puesto=(string)$_GET["puesto"];
	$username=(string)$_GET["username"];
	$password=(string)$_GET["password"];

	$inserta_empleado="INSERT INTO empleado (id_empleado,nomina,nombre,correo,username,password,privilegio,id_puesto,habilitado) 
		VALUES ('0','$nomina','$nombre','$correo','$username','$password','0','$puesto','1')";
	$ieq=mysqli_query($con,$inserta_empleado)or die(mysqli_error());

	echo 1;
?>
