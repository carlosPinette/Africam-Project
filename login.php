<?php
	require "conexion.php";
	
	$mensaje="";
	
	if(isset($_POST["submit"]))
	{
		$username=(string)$_POST["username"];
		$password=(string)$_POST["password"];

		$user="SELECT username FROM empleado WHERE username='$username'";
		$uq=mysqli_query($con,$user)or die(mysqli_error());
		$user_exist=mysqli_num_rows($uq);

		if($user_exist==0)
			$mensaje="<label id='mensaje'>El usuario no existe</label>";
		else
		{	
			$pass="SELECT e.privilegio, e.id_empleado, e.nomina, e.nombre, g.nombre_ger, p.nombre_puesto
				FROM empleado e, gerencia g, puesto p
				WHERE e.username='$username' AND e.password='$password' AND e.id_puesto=p.id_puesto AND p.id_gerencia=g.id_gerencia";
			$pq=mysqli_query($con,$pass)or die(mysqli_error());
			$pass_exist=mysqli_num_rows($pq);			
			$datos=mysqli_fetch_array($pq);

			if($pass_exist==0)
				$mensaje="<label id='mensaje'>Contrase&ntildea incorrecta</label>";
			else 
			{
				session_start();
				$_SESSION["empleado-id"]=$datos[1];
				$_SESSION["empleado-nomina"]=$datos[2];
				$_SESSION["empleado-nombre"]=$datos[3];
				$_SESSION["gerencia"]="Gerencia de ".$datos[4];
				$_SESSION["puesto"]=$datos[5];
				
				if($datos[0]==1)
					header("Location:inicio.php");
				else
					header("Location:evaluacion.php");
			}
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />

		<title>Africam Safari</title>

		<h1>Sistema de Evaluaci&oacuten de Desempe&ntildeo</h1>
	</head>

	<body>
		<form action="login.php" method="post">
			<?php echo $mensaje; ?>
			<br>
			<br>

			<label>Usuario</label>
			<br>
			<input type="text" name="username" required></input>
			<br>
			<br>
		
			<label>Contrase&ntildea</label>
			<br>
			<input type="password" name="password" required></input>
			<br>
			<br>

			<input type="submit" name="submit" value="Ingresar"></input>
		</form>
	</body>
</html>
