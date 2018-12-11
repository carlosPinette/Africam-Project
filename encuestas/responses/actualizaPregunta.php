<?php
	require "../../conexion.php";
	
	$texto=$_GET["texto"];
	$tipo=$_GET["tipo"];
	$idPregunta=$_GET["idPregunta"];

	$query=mysqli_query($con,"UPDATE pregunta SET texto='".$texto."', tipo='".$tipo."' WHERE id_pregunta='".$idPregunta."'");

?>
