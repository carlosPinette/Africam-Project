<?php
	session_start();
	if(!isset($_SESSION["empleado-id"]))
		header("Location:login.php");	
?>

<html>
	<head>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery-1.8.3.js"></script>
		<script src="js/funciones.js"></script>
		<script src="js/afric.js"></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css" />

		<title>Africam Safari</title>

		<strong>
			<label><?php echo $_SESSION["gerencia"]; ?></label>
			<br>
			<label><?php echo $_SESSION["puesto"].": ".$_SESSION["empleado-nombre"]; ?></label>
			<br>
			<br>
		</strong>
		
		<div id="cssmenu">
		<ul>	
			<li class="active"><a href="inicio.php">Inicio</a></li>
			<li class="has-sub"><a href="#" onclick="cargar('datos/datos.php')">Mi Informaci&oacuten</a>
				<ul>
					<li><a href="#" onclick="cargar('datos/cambiar-usuario.php')">Cambiar usuario</a></li>
					<li><a href="#" onclick="cargar('datos/cambiar-correo.php')">Cambiar correo</a></li>
					<li><a href="#" onclick="cargar('datos/cambiar-password.php')">Cambiar contrase&ntildea</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#" onclick="cargar('gerencias/gerencias.php')">Gerencias</a>
				<ul>
					<li><a href="#" onclick="cargar('gerencias/crear-gerencia.php')">Crear una gerencia</a></li>
					<li><a href="#" onclick="cargar('gerencias/cambiar-gerencia.php')">Cambiar una gerencia</a></li>
					<li><a href="#" onclick="cargar('gerencias/baja-gerencia.php')">Dar de baja una gerencia</a></li>
					<li><a href="#" onclick="cargar('gerencias/alta-gerencia.php')">Dar de alta una gerencia</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#" onclick="cargar('puestos/puestos.php')">Puestos</a>
				<ul>
					<li><a href="#" onclick="cargar('puestos/crear-puesto.php')">Crear un puesto</a></li>
					<li><a href="#" onclick="cargar('puestos/cambiar-puesto.php')">Cambiar un puesto</a></li>
					<li><a href="#" onclick="cargar('puestos/baja-puesto.php')">Dar de baja un puesto</a></li>
					<li><a href="#" onclick="cargar('puestos/alta-puesto.php')">Dar de alta un puesto</a></li>
				</ul>			
			</li>
			<li class="has-sub"><a href="#" onclick="cargar('empleados/empleado.php')">Empleados</a>
				<ul>
					<li><a href="#" onclick="cargar('empleados/crear-empleado.php')">Crear un empleado</a></li>
					<li><a href="#" onclick="cargar('empleados/alta-empleado.php')">Dar de alta un empleado</a></li>
				</ul>			
			</li>
			<li class="has-sub"><a href="grupos.php">Grupos</a></li>
			<li class="has-sub"><a href="#" onclick="cargar('encuestas/encuesta.php')">Encuestas</a>
				<ul>
					<li><a href="#" onclick="cargar('encuestas/crear-encuesta.php')">Crear una encuesta</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="asignaciones.php">Asignaciones</a></li>
			<li class="last"><a href="logout.php">Salir</a></li>
		</ul>
		</div>
	</head>
