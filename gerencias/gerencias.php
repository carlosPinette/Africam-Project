<?php
	require "../conexion.php";

	$gerencia_habilitada="SELECT nombre_ger FROM gerencia WHERE habilitado=1";
	$ghq=mysqli_query($con,$gerencia_habilitada)or die(mysqli_error());
	$habilitada=mysqli_num_rows($ghq);

	$gerencia_inhabilitada="SELECT nombre_ger FROM gerencia WHERE habilitado=0";
	$giq=mysqli_query($con,$gerencia_inhabilitada)or die(mysqli_error());
	$inhabilitada=mysqli_num_rows($giq);

	$despliega_gerencia_habilitada="<label>Existen <b>$habilitada</b> gerencias <b>habilitadas</b>: </label><br><br>";
	$despliega_gerencia_inhabilitada="<label>Existen <b>$inhabilitada</b> gerencias <b>inhabilitadas</b>: </label><br><br>";

	while($datos1=mysqli_fetch_array($ghq))
	{
		$despliega_gerencia_habilitada=$despliega_gerencia_habilitada."
			<li><label>".$datos1[0]."</label></li><br>
		";
	}

	while($datos2=mysqli_fetch_array($giq))
	{
		$despliega_gerencia_inhabilitada=$despliega_gerencia_inhabilitada."
			<li><label>".$datos2[0]."</label></li><br>
		";
	}
?>
	<body>
		<h1>Administraci&oacuten de Gerencias</h1>
		<?php echo $despliega_gerencia_habilitada; ?>
		<br>
		<br>
		<?php echo $despliega_gerencia_inhabilitada; ?>
	</body>
</html>
