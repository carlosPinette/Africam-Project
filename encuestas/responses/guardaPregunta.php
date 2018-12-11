<?php
	require "../../conexion.php";

	$texto=$_GET["texto"];
	$tipo=$_GET["tipo"];
	$idencuesta=$_GET["idEncuesta"];

	$query=mysqli_query($con,"INSERT into pregunta (id_pregunta,texto,tipo,id_encuesta,habilitado) VALUES ('0','".$texto."','".$tipo."','".$idencuesta."','1')");
?>
