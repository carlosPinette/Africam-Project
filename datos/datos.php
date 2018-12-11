<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:../login.php");	

	require "../conexion.php";
	
	$id=$_SESSION["empleado-id"];

	$username_correo="SELECT username, correo FROM empleado WHERE id_empleado=$id";
	$ucq=mysqli_query($con,$username_correo)or die(mysqli_error());
	$datos=mysqli_fetch_array($ucq);
	
	$username=$datos[0];
	$correo=$datos[1];
?>

	<body>
		<h1>Mi Informaci&oacuten</h1>

		<b><label>Nomina:</label></b>
		<br>
		<label><?php echo $_SESSION["empleado-nomina"]; ?></label>
		<br>
		<br>

		
		<b><label>Nombre:</label></b>
		<br>
		<label><?php echo $_SESSION["empleado-nombre"]; ?></label>
		<br>
		<br>
		
		
		<b><label>Usuario:</label></b>
		<br>
		<label><?php echo $username; ?></label>
		<br>
		<br>

		<b><label>Correo:</label></b>
		<br>
		<label><?php echo $correo; ?></label>
		<br>
		<br>	
	</body>
</html>
