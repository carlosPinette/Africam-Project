<table>
	<tr>
 		<td>
            		Nombre de encuesta: 
            	</td>
            
		<td>
            		<input type="text" id="nombre" maxlength="50"></input>
            	</td>
        </tr>

        <tr>
        	<td>
        	    	Descripci&oacute;n:
            	</td>
            
		<td>
            		<TEXTAREA id="descripcion" rows="3" cols="16"></TEXTAREA>
            	</td>
        </tr>

        <tr>
		<td>
			<input type="button" onclick="guardaEncuesta()" value="Continuar"></input>
         	</td>
		
		<td>
          		<input type="button" value="Volver" onclick="cargar('encuestas/encuesta.php')"></input>
         	</td>
	</tr>
</table>
