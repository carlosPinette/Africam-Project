<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");

	require "../conexion.php";

	$gerencia=(string)$_GET["gerencia"];
	$puesto=(string)$_GET["puesto"];

	$id_puesto="SELECT id_puesto FROM puesto WHERE nombre_puesto='$puesto' AND id_gerencia='$gerencia'";
	$pq=mysqli_query($con,$id_puesto)or die(mysqli_error());
	$puesto_exist=mysqli_num_rows($pq);

	if($puesto_exist==0)
	{
		$inserta_puesto="INSERT INTO puesto (id_puesto,nombre_puesto,id_gerencia, habilitado) VALUES ('0','$puesto','$gerencia','1')";
		$ipq=mysqli_query($con,$inserta_puesto)or die(mysqli_error());

		echo 1;
	}
	else	
		echo 0;
?>
