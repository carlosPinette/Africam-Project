<?php 
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	

	require "../conexion.php";

	$gerencia=$_GET["gerencia"];
	$id=$_GET["id"];
	$puesto=(string)$_GET["puesto"];

	$id_puesto="SELECT id_puesto FROM puesto WHERE id_gerencia=$gerencia AND nombre_puesto='$puesto'";
	$ipq=mysqli_query($con,$id_puesto)or die(mysqli_error());
	$puesto_exist=mysqli_num_rows($ipq);

	if($puesto_exist==0)
	{
		$actualiza_puesto="UPDATE puesto SET nombre_puesto='$puesto' WHERE id_puesto='$id' AND id_gerencia='$gerencia'";
		$apq=mysqli_query($con,$actualiza_puesto)or die(mysqli_error());

		echo 1;
	}
	else
		echo 0;
?>
