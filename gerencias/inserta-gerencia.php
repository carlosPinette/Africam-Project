<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$gerencia=(string)$_GET["gerencia"];

	$id_gerencia="SELECT id_gerencia FROM gerencia WHERE nombre_ger='$gerencia'";
	$gq=mysqli_query($con,$id_gerencia)or die(mysqli_error());
	$gerencia_exist=mysqli_num_rows($gq);

	if($gerencia_exist==0)
	{
		$inserta_gerencia="INSERT INTO gerencia (id_gerencia,nombre_ger,habilitado) VALUES ('0','$gerencia','1')";
		$igq=mysqli_query($con,$inserta_gerencia)or die(mysqli_error());
	
		echo 1;
	}
	else	
		echo 0;
?>
