<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");

	require "../conexion.php";

	$id=$_GET["id"];
	$gerencia=(string)$_GET["gerencia"];

	$id_gerencia="SELECT id_gerencia FROM gerencia WHERE nombre_ger='$gerencia'";
	$gq=mysqli_query($con,$id_gerencia)or die(mysqli_error());
	$gerencia_exist=mysqli_num_rows($gq);

	if($gerencia_exist==0)
	{
		$actualiza_gerencia="UPDATE gerencia SET nombre_ger='$gerencia' WHERE id_gerencia=$id";
		$agq=mysqli_query($con,$actualiza_gerencia)or die(mysqli_error());

		echo 1;
	}
	else
		echo 0;
?>
