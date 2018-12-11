<?php
	require "../conexion.php"; 	
	$id_encuesta=$_GET["idEncuesta"];

	$query="SELECT p.id_pregunta, p.texto, p.tipo FROM pregunta p WHERE p.id_encuesta=$id_encuesta";
	$q=mysqli_query($con,$query)or die(mysqli_error());
	$r=1;
	$f=$r+1;
?>
<?php	
	while($row=mysqli_fetch_array($q))
	{
		echo "<div id=\"".$row["id_pregunta"]."\">";
		echo "<table>";
		echo "<tr><td>";
			
		echo "Pregunta: <br> </td> <td>".$row["texto"]."</td>
			<td><div class=\"logomas\"><a class=\"link\" href=\"#\" onClick=\"editaPregunta('".$row["id_pregunta"]."','".$id_encuesta."')\"><img  src=\"img/edit.png\" title=\"Editar\" /> </a></div></td>
			<td><div class=\"logomas\"><a class=\"link\" href=\"#\" onClick=\"borraPregunta('".$row["id_pregunta"]."','".$id_encuesta."')\"><img  src=\"img/delete.png\" title=\"Eliminar\" /></a></div></td>"; 
		echo "</tr>";
		echo "</table>";
		echo "<table>";
		echo "<tr><td>";
		
		if ($row["tipo"]==1)
		{
			//SELECCION
			echo "<input type=\"radio\" value=\"Si\" disabled=\"disabled\">Si &nbsp;
                   		<input type=\"radio\" value=\"No\" disabled=\"disabled\">No";
		}
		if($row["tipo"]==2)
		{
			//INCREMENTAL
			echo "<input type=\"radio\" value=\"1\" disabled=\"disabled\">1  &nbsp;
				<input type=\"radio\" value=\"2\" disabled=\"disabled\">2  &nbsp;
				<input type=\"radio\" value=\"3\" disabled=\"disabled\">3  &nbsp;
				<input type=\"radio\" value=\"4\" disabled=\"disabled\">4  &nbsp;
				<input type=\"radio\" value=\"5\" disabled=\"disabled\">5  &nbsp;
				<input type=\"radio\" value=\"6\" disabled=\"disabled\">6  &nbsp;
				<input type=\"radio\" value=\"7\" disabled=\"disabled\">7  &nbsp;
				<input type=\"radio\" value=\"8\" disabled=\"disabled\">8  &nbsp;
				<input type=\"radio\" value=\"9\" disabled=\"disabled\">9  &nbsp;
				<input type=\"radio\" value=\"10\" disabled=\"disabled\">10  &nbsp;";	
		}
		if($row["tipo"]==3)
		{
			//RESPUESTA ABIERTA
			echo "<textarea disabled=\"disabled\">Escriba su texto aqu&iacute </textarea>";
		}
				
		echo "</td></tr>";
		echo "</table>";
		echo "</div>";			
		echo "<br><br>";
	}
?>
	
<table>   
        <tr>
        	<td>
        	    	Pregunta
            	</td>

	    	<td>
            		<input type="text" id="<?php echo 'texto'; ?>"/>
            	</td>
        </tr>

        <tr>    
            	<td>
            		Tipo:
            	</td>
            
		<td>
            		<select id="tipo" name="idTipo" onchange="<?php echo 'cambiaTipo()'; ?>">
                		<option value="1" selected="selected">Seleccion</option>
                    		<option value="2">Incremental</option>
                    		<option value="3">Respuesta Abierta</option>
                	</select>
            	</td>	
        </tr> 
</table>
       
<div id ="tip1" class="rec"> 
        <table>    
       		<tr>
            		<td><input type="radio" value="Si" checked="checked" disabled="disabled">Si</td>
            		<td><input type="radio" value="No" disabled="disabled">No</td>
            	</tr>
	</table>
</div>
      
<table>
          <tr>
          	<td>
        		<input type="button" onclick="guardaPregunta('<?php echo $id_encuesta; ?>')" value="+"/>
      		</td>
        </tr> 
</table>
        
<table>
        <tr>
        	<td>
        		<input type="button" value="Todas las Encuestas" onclick="cargar('<?php echo 'encuestas/encuesta.php'; ?>')"/>
            	</td>
        </tr>
</table>
        
