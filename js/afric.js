function cargar(pagina)
{
     $.get(pagina,function(e){
		// location.href=pagina;
		$("#contenido").load(pagina);
		
	 });
}

function cambiaTipo()
{
		var tipo = $("#tipo").val();
				//Opciones
		$.ajax({

		url: "encuestas/responses/opciones.php?tipo="+tipo,

		type: "GET",

		context: document.body,

		success: function(responseText){
			$("#tip1").html(responseText);
			
		}

		});

}

function cambiaTipoEsp(idPregunta)
{
		var tipo = $("#tipo").val();
				//Opciones
		$.ajax({

		url: "encuestas/responses/opciones.php?tipo="+tipo,

		type: "GET",

		context: document.body,

		success: function(responseText){
			$("#tip"+idPregunta).html(responseText);
			
		}

		});

}

/*function aumentar(r){
		r++;

		$.ajax({
			url:  "responses/preguntas.php?r="+r,
			type: "GET",
		context: document.body,
		success: function(responseText){
			$("#tip"+r).html(responseText);	
		}
		
			});
			alert (r);
	}*/

function guardaEncuesta()
{
		var nombre=$("#nombre").val();
		var descripcion=$("#descripcion").val();
		$.ajax({
			url: "encuestas/responses/creaencuesta.php?nombre="+nombre+"&descripcion="+descripcion,
			type: "GET",
		context: document.body,
			success:function(responseText){
					cargar('encuestas/cambiar-encuesta.php?idEncuesta='+responseText);
				}
			});
}

function guardaPregunta(idEncuesta)
{
	var texto=$("#texto").val();
	var tipo=$("#tipo").val();
		$.ajax({
			url: "encuestas/responses/guardaPregunta.php?texto="+texto+"&tipo="+tipo+"&idEncuesta="+idEncuesta,
			type: "GET",
		context: document.body,
			success:function(responseText){
					cargar('encuestas/cambiar-encuesta.php?idEncuesta='+idEncuesta);
				}
			});
}

function editaPregunta(idPregunta,idEncuesta)
{

	 $.ajax({
		 	url: "encuestas/responses/editaPregunta.php?idPregunta="+idPregunta+"&idEncuesta="+idEncuesta,
			type: "GET",
		context: document.body,
			success:function(responseText){
				
					$('#'+idPregunta).html(responseText);
				}
		 });
}

function actualizaPregunta(idPregunta,idEncuesta)
{
		var texto=$("#texto").val();
	    var tipo=$("#tipo").val();
			 $.ajax({
		 	url: "encuestas/responses/actualizaPregunta.php?idPregunta="+idPregunta+"&texto="+texto+"&tipo="+tipo,
			type: "GET",
		context: document.body,
			success:function(responseText){
					cargar('encuestas/cambiar-encuesta.php?idEncuesta='+idEncuesta);
				}
		 });
}

function borraPregunta(idPregunta,idEncuesta)
{
	 $.ajax({
		 	url: "encuestas/responses/eliminaPregunta.php?idPregunta="+idPregunta,
			type: "GET",
		context: document.body,
			success:function(responseText){
					cargar('encuestas/cambiar-encuesta.php?idEncuesta='+idEncuesta);
				}
		 });
}
