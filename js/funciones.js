//header.php
function cargar(pagina)
{
	$.get(pagina,function(e)
	{
		$("#contenido").load(pagina);
	});
}

//cambiar-usuario.php
function verifica_usuario()
{
	$.get("datos/verifica-usuario.php",
	{
		username: $("#username").val()
	},
		function(msg)
	{
		if(msg==1)
			$("#mensaje").html('El usuario ya existe');
		else
			$("#mensaje").html('');
	});
}

function cambiar_usuario()
{
	if($("#username").val()!='')
	{
		$.get("datos/actualiza-usuario.php",
		{
			username: $("#username").val()
		},
		function(msg)
		{
			if(msg==1)
			{
				$("#mensaje").html('Usuario modificado exitosamente');
				$("#username").val('');
			}
			else
				$("#mensaje").html('Error en modificaci&oacuten');
		});
	}
	else
		$("#mensaje").html('Ingrese un usuario');
}

//cambiar-correo.php
function cambiar_correo()
{
	if($("#correo").val()!='')
	{
		$.get("datos/actualiza-correo.php",
		{
			correo: $("#correo").val()
		},
		function(msg)
		{
			if(msg==1)
			{
				$("#mensaje").html('Correo modificado exitosamente');
				$("#correo").val('');
			}
			else
				$("#mensaje").html('Error en modificaci&oacuten');		
		});
	}
	else
		$("#mensaje").html('Ingrese un correo');
}

//cambiar-password.php
function verifica_password()
{
	if($("#password1").val()==$("#password2").val())
	{
		$("#mensaje").html('');
		$("#ingresar").show();
	}
	else
	{
		$("#mensaje").html('Las contrase&ntildeas no coinciden');
		$("#ingresar").hide();
	}
}

function cambiar_password()
{
	$.get("datos/actualiza-password.php",
	{
		password: $("#password2").val()
	},
	function(msg)
	{
		if(msg==1)
		{
			$("#mensaje").html("Contrase&ntildea modificada exitosamente");
			$("#password1").val('');
			$("#password2").val('');
			$("#ingresar").hide();
		}
		else
			$("#mensaje").html("Error en modificaci&oacuten");
	});	
}

//crear-gerencia.php
function crear_gerencia()
{
	if($("#gerencia").val()!='')
	{
		$.get("gerencias/inserta-gerencia.php",
		{
			gerencia: $("#gerencia").val()
		},
		function(msg)
		{
			if(msg==0)
				$("#mensaje").html('La gerencia ya existe');
			else if(msg==1)
			{
				$("#mensaje").html('La gerencia se creo exitosamente');
				$("#gerencia").val('');
			}	
			else
				$("#mensaje").html('Error creando la gerencia');
		});
	}
	else
		$("#mensaje").html('Ingrese una gerencia');
}

//cambiar-gerencia.php
function selecciona_gerencia()
{
	$("#gerencia").show();
	$("#ingresar").show();
				
	if($("#seleccionar").val()==0)
	{
		$("#gerencia").hide();
		$("#ingresar").hide();
	}
	else
		$("#gerencia").val($("#seleccionar option:selected").text());
}

function cambiar_gerencia()
{
	if($("#gerencia").val()!=='')
	{
		$.get("gerencias/actualiza-gerencia.php",
		{
			id: $("#seleccionar").val(),
			gerencia: $("#gerencia").val()
		},
		function(msg)
		{
			if(msg==0)
				$("#mensaje").html('Ya existe una gerencia con ese nombre');
			else if(msg==1)
			{
				$("#contenido").load('/africam/gerencias/cambiar-gerencia.php', function()
				{
					$("#mensaje").html('Gerencia modificada exitosamente');
				});
			}
			else
				$("#mensaje").html('Error en modificaci&oacuten de gerencia');
			});
		}
		else
		{
			$("#mensaje").html('Ingrese un nuevo nombre');
			$("#gerencia").val($("#seleccionar option:selected").text());
		}
}

//baja-gerencia.php
function baja_gerencia()
{
	if($("#id").val()==0)
		$("#mensaje").html('Seleccione una gerencia');
	else
	{
		$.get("gerencias/inhabilitar-gerencia.php",
		{
			id: $("#id").val()
		},
		function(msg)
		{
			if(msg==0)
				$("#mensaje").html('No se puede dar de baja una gerencia en uso');
			else if(msg==1)
				$("#contenido").load('gerencias/baja-gerencia.php', function()
				{
					$("#mensaje").html('La gerencia se dio de baja exitosamente');
				});
			else
				$("#mensaje").html('Error al dar de baja la gerencia');
		});
	}
}

//alta-gerencia.php
function alta_gerencia()
{
	if($("#id").val()==0)
		$("#mensaje").html('Seleccione una gerencia');
	else
	{	
		$.get("gerencias/habilitar-gerencia.php",
		{
			id: $("#id").val()
		},
		function(msg)
		{
			if(msg==1)
				$("#contenido").load('gerencias/alta-gerencia.php', function()
				{
					$("#mensaje").html('La gerencia se dio de alta exitosamente');
				});
			else
				$("#mensaje").html('Error al dar de alta la gerencia');
		});
	}
}

//crear-puesto.php
function crear_puesto()
{
	if($("#gerencia").val()==0)
		$("#mensaje").html('Seleccione una gerencia');
	else
	{
		if($("#puesto").val()!='')
		{
			$.get("puestos/inserta-puesto.php",
			{
				gerencia: $("#gerencia").val(),
				puesto: $("#puesto").val()
			},
			function(msg)
			{
				if(msg==0)
					$("#mensaje").html('El puesto ya existe en esta gerencia');							
				else if(msg==1)
				{
					$("#mensaje").html('El puesto se creo exitosamente');
					$("#puesto").val('');
				}
				else
					$("#mensaje").html('Error creando el puesto');
			});
		}
		else
			$("#mensaje").html('Ingrese un puesto');	
	}
}

//cambiar-puesto()
function muestra_puesto()
{
	$(".opcion").remove();
	$("#seleccion").hide();
	$("#ingresar").hide();

	if($("#gerencia").val()!=0)
	{
		$.get("puestos/muestra-puesto.php",
		{
			gerencia: $("#gerencia").val()
		},
		function(msg)
		{
			$("#puesto").show();
			$("#puesto").append(msg);
		});
	}
	else
	{
		$("#puesto").hide();
		$("#seleccion").hide();
		$("#ingresar").hide();
	}
}

function selecciona_puesto()
{
	$("#seleccion").show();
	$("#ingresar").show();

	if($("#puesto").val()==0)
		$("#seleccion").val('');
	else
		$("#seleccion").val($("#puesto option:selected").text());
}

function cambiar_puesto()
{
	if($("#seleccion").val()!=='')
	{
		$.get("puestos/actualiza-puesto.php",
		{
			gerencia: $("#gerencia").val(),
			id: $("#puesto").val(),
			puesto: $("#seleccion").val(),
		},
		function(msg)
		{
			if(msg==0)
				$("#mensaje").html('Ya existe un puesto con ese nombre en esta gerencia');
			else if(msg==1)
			{
				$("#contenido").load('puestos/cambiar-puesto.php', function()
				{
					$("#mensaje").html('Puesto modificado exitosamente');
				});
			}
			else
				$("#mensaje").html('Error en modificaci&oacuten de puesto');
		});
	}
	else
	{
		$("#mensaje").html('Ingrese un nuevo nombre');
		$("#seleccion").val($("#puesto option:selected").text());
	}	
}

//baja-puesto()
function muestra_ingreso()
{
	if($("#puesto").val()==0)
		$("#ingresar").hide();
	else
		$("#ingresar").show();
}

function baja_puesto()
{
	$.get("puestos/inhabilitar-puesto.php",
	{
		gerencia: $("#gerencia").val(),
		id: $("#puesto").val()
	},
	function(msg)
	{
		if(msg==0)
			$("#mensaje").html('No se puede dar de baja un puesto en uso');
		else if(msg==1)
			$("#contenido").load('puestos/baja-puesto.php', function()
			{
				$("#mensaje").html('El puesto se dio de baja exitosamente');
			});
		else
			$("#mensaje").html('Error al dar de baja el puesto');
	});
}

//alta-puesto.php
function muestra_puesto_inhabilitado()
{
	$(".opcion").remove();
	$("#ingresar").hide();

	if($("#gerencia").val()!=0)
	{
		$.get("puestos/muestra-puesto-inhabilitado.php",
		{
			gerencia: $("#gerencia").val()
		},
		function(msg)
		{
			$("#puesto").show();
			$("#puesto").append(msg);
		});
	}
	else
	{
		$("#puesto").hide();
		$("#ingresar").hide();
	}
}

function alta_puesto()
{
	$.get("puestos/habilitar-puesto.php",
	{
		gerencia: $("#gerencia").val(),
		id: $("#puesto").val()
	},
	function(msg)
	{
		if(msg==1)
			$("#contenido").load('puestos/alta-puesto.php', function()
			{
				$("#mensaje").html('El puesto se dio de alta exitosamente');
			});
		else
			$("#mensaje").html('Error al dar de alta el puesto');
	});
}

//empleado.php
function busqueda()
{
	if($("#buscar").val()=='')
		$("#respuesta").html('');
	else
	{
		$.get("empleados/busca-empleado.php",
		{
			b: $("#buscar").val()
		},
		function(msg)
		{
			$("#respuesta").html(msg);
		});
	}		
}

//busca-empleado.php
function cambiar(empleado)
{
	$.get("empleados/cambiar-empleado.php",
	{
		id: empleado
	},
	function(msg)
	{
		$("#contenido").html(msg);	
	});
}

//cambiar-empleado.php
function verifica_nomina()
{
	$.get("empleados/verifica-nomina.php",
	{
		nomina: $("#nomina").val()
	},
	function(msg)
	{
		if(msg==0)
			$("#mensaje").html('La n&oacutemina ya fue ocupada');
		else
			$("#mensaje").html('');
	});
}

function cambiar_gerencia_puesto()
{
	$("#seleccion").remove();
	$("#seleccion").remove();

	$.get("empleados/muestra-gerencia.php", function(msg)
	{
		$("#gerencia").append(msg);
	}); 
}

function muestra_puesto2()
{
	$(".opcion").remove();

	if($("#gerencia").val()!=0)
	{
		$.get("puestos/muestra-puesto.php",
		{
			gerencia: $("#gerencia").val()
		},
		function(msg)
		{
			$("#puesto").append(msg);
		});
	}
	else
	{
		$(".opcion").remove();
	}
}

function cambiar_empleado()
{
	$.get("empleados/actualiza-empleado.php",
	{
		id: $("#id").val(),
		nomina: $("#nomina").val(),
		nombre: $("#nombre").val(),
		correo: $("#correo").val(),
		puesto: $("#puesto").val(),
		username: $("#username").val(),
		password: $("#password").val()
	},
	function(msg)
	{
		if(msg==1)
			$("#mensaje").html('Se modifico el empleado exitosamente');
		else
		{
			$("#contenido").load('empleados/cambiar-empleado.php?id='+$("#id").val(), function()
			{
				$("#mensaje").html('Error en modificaci&oacuten de empleado');
			});
		}
	});
}

function baja_empleado()
{
	$.get("empleados/inhabilitar-empleado.php",
	{
		id: $("#id").val()
	},
	function(msg)
	{
		if(msg==1)
		{
			$("#contenido").load('empleados/empleado.php', function()
			{
				$("#respuesta").append('<label id="mensaje">El empleado se dio de baja exitosamente</label>');
			});	
		}
		else
			$("#mensaje").html('Error al dar de baja el empleado');	
	});
}

//crear-empleado.php
function mostrar_gerencia()
{
	$.get("empleados/muestra-gerencia.php", function(msg)
	{
		$("#gerencia").append(msg);
	}); 
}

function crear_empleado()
{
	if($("#nomina").val()=='' || $("#nombre").val()=='' || $("#correo").val()=='' || $("#gerencia").val()==0 || $("#puesto").val()==0 || $("#username").val()=='' || $("#password").val()=='' )
		$("#mensaje").html('Ingrese todos los datos');
	else
	{
		$.get("empleados/inserta-empleado.php",
		{
			nomina: $("#nomina").val(),
			nombre: $("#nombre").val(),
			correo: $("#correo").val(),
			puesto: $("#puesto").val(),
			username: $("#username").val(),
			password: $("#password").val()
		},
		function(msg)
		{
			if(msg==1)
			{
				$("#contenido").load('empleados/crear-empleado.php', function()
				{
					$("#mensaje").html('Se creo el empleado exitosamente');
				});
			}
			else
				$("#mensaje").html('Error creando el usuario');
		});
	}
}

//alta-empleado.php
function alta_empleado(empleado)
{
	$.get("empleados/habilitar-empleado.php",
	{
		id: empleado
	},
	function(msg)
	{
		if(msg==1)
		{
			$("#contenido").load('empleados/alta-empleado.php', function()
			{
				$("#mensaje").html('El empleado se dio de alta exitosamente');
			});
		}
		else
			$("#mensaje").html('Error al dar de alta el empleado');	
	});
}


