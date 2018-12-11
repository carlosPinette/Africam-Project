	<body>
		<h1>Cambiar Usuario</h1>

		<label>Escriba su nuevo usuario, este es el que le permite entrar al sistema.</label>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>

		<input id="username" type="text" onblur="verifica_usuario()"></input>
		<button id="ingresar" onclick="cambiar_usuario()">Cambiar</button>
		<br>
		<br>
	</body>
</html>
