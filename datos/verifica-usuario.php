<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$username=$_GET["username"];

	$verifica_usuario="SELECT id_empleado FROM empleado WHERE username='$username'";
	$vuq=mysqli_query($con,$verifica_usuario)or die(mysqli_error());
	$exist=mysqli_num_rows($vuq);

	if($exist==0)
		echo 0;
	else
		echo 1;
?>

