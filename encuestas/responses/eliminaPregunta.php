<?php
	require "../../conexion.php";

	$idPregunta=$_GET["idPregunta"];
	
	$query=mysqli_query($con,"DELETE FROM pregunta WHERE id_pregunta ='".$idPregunta."'");
?>
