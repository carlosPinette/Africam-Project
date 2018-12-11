	<body>
		<h1>Cambiar Contrase&ntildea</h1>

		<label>Escriba su nueva contrase&ntildea, esta es la que le permite entrar al sistema.</label>
		<br>
		<br>

		<label id="mensaje"></label>
		<br>

		<label>Nueva contrase&ntildea: </label>
		<input id="password1" type="password"></input>
		<br>
		<br>

		<label>Repetir contrase&ntildea: </label>
		<input id="password2" type="password" onkeyup="verifica_password()"></input>
		<button hidden="true" id="ingresar" onclick="cambiar_password()">Cambiar</button>
		<br>
		<br>
	</body>
</html>
