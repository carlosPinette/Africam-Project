<?php
	require "../conexion.php"; 	

	$query=mysqli_query($con,"SELECT id_encuesta, nombre, descripcion FROM encuesta WHERE habilitado='1'");
?>
	<table>
		<tr>
    			<td>
        			<div class="logomas">
       					<a class="link" href="#" onClick="cargar('encuestas/crear-encuesta.php')"><img  src="img/new.png" title="Nuevo"/>Nueva Encuesta</a>
          			</div>
        		</td>
    		</tr>
	</table>

	<table>
    		<?php
			while($row=mysqli_fetch_array($query))
			{
				echo "<tr>";
				echo "<td>".$row["nombre"]." &nbsp;</td><td> ".$row["descripcion"]." &nbsp;</td> ";
		
				echo "<td><div class=\"logomas\"><a class=\"link\" href=\"#\" onClick=\"cargar('encuestas/cambiar-encuesta.php?idEncuesta='+".$row["id_encuesta"].")\"><img  src=\"img/ver.png\" title=\"Ver\"/>Visualizar</a></div></td></tr>";
			}
		?>
	</table>

	
