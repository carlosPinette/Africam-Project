<?php
	require "../../conexion.php";

	$idPregunta=$_GET["idPregunta"];
	$idEncuesta=$_GET["idEncuesta"];
	$query=mysqli_query($con,"SELECT texto,tipo FROM pregunta WHERE id_pregunta=".$idPregunta."");

	while ($row=mysqli_fetch_array($query)){
?>

<table>   
        <tr>
        	<td>
        	    	Pregunta
        	</td>
            
		<td>
            		<input type="text" id="<?php echo 'texto'; ?>" value="<?php echo $row[0] ?>"/>
               
            	</td>
        </tr>

        <tr>    
            	<td>
            		Tipo:
            	</td>
            
		<td>
            		<select id="tipo" name="idTipo" onchange="cambiaTipoEsp(<?php echo $idPregunta; ?>)">
               	 	<?php
                		if ($row[1]==1)
				{
			?>
                    		<option value="1" selected="selected">Seleccion</option>
                    		<option value="2">Incremental</option>
                    		<option value="3">Respuesta Abierta</option>               	
                	</select>
            	</td>	
	</tr> 
</table>
        
<div id ="<?php echo 'tip'.$idPregunta; ?>" class="rec" > 	
	<table>
        <tr>
            <td><input type="radio" value="Si" checked="checked" disabled="disabled">Si</td>
            <td><input type="radio" value="No" disabled="disabled">No</td>
  	</tr>
           
         		<?php
                    		}
			?>
                     	<?php
                		if ($row[1]==2)
				{
			?>
                   		<option value="1">Seleccion</option>
                    		<option value="2" selected="selected">Incremental</option>
                    		<option value="3">Respuesta Abierta</option>               	
               	 	</select>
            	</td>	
        </tr> 
        </table>
          
        	 <div id="<?php echo 'tip'.$idPregunta; ?>" class="rec" > 
        <table>
        	
        	<tr>
               <td><input type="radio" value="1" disabled="disabled">1  &nbsp;</td>
                <td><input type="radio" value="2" disabled="disabled">2  &nbsp;</td>
                 <td><input type="radio" value="3" disabled="disabled">3  &nbsp;</td>
                  <td><input type="radio" value="4" disabled="disabled">4  &nbsp;</td>
                   <td><input type="radio" value="5" disabled="disabled">5  &nbsp;</td>
                    <td><input type="radio" value="6" disabled="disabled">6  &nbsp;</td>
                     <td><input type="radio" value="7" disabled="disabled">7  &nbsp;</td>
                      <td><input type="radio" value="8" disabled="disabled">8  &nbsp;</td>
                       <td><input type="radio" value="9" disabled="disabled">9  &nbsp;</td>
                        <td><input type="radio" value="10" disabled="disabled">10  &nbsp;</td>
            </tr>
          
          <?php
                    }
					?>
                      <?php
                	if ($row[1]==3){
						?>
                    <option value="1">Seleccion</option>
                    <option value="2">Incremental</option>
                    <option value="3" selected="selected">Respuesta Abierta</option>               	
                </select>
            </td>	
        </tr> 
        </table>
          
        	 <div id ="<?php echo 'tip'.$idPregunta ?>" class="rec" > 
        <table>
        	
        <tr>
            	<td>
                	<textarea disabled="disabled">Escriba su texto aqu&iacute </textarea>
                </td>
            </tr>
           
          <?php
                    }
					?>
					                    
                   
        </table>
         </div> 
        <input type="button" onclick="actualizaPregunta(<?php echo $idPregunta.','.$idEncuesta; ?>)" value="Actualizar pregunta"/>
        <?php
	}
	?>
