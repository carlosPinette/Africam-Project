<?php
	require "../../conexion.php";

	$nombre= $_GET["nombre"];
	$descripcion=$_GET["descripcion"];
	$query="INSERT into encuesta (id_encuesta,nombre,descripcion,habilitado) VALUES ('0','".$nombre."','".$descripcion."','1')";
	$do_query=mysqli_query($con,$query);

	$sql=mysqli_query($con,"SELECT id_encuesta FROM encuesta ORDER BY id_encuesta DESC limit 1");
	//$sql=mysqli_result($sql,0);
	$sql=mysqli_fetch_row($sql);
	echo $sql[0];
?>
