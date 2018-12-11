<table>
<?php
	$idTipo=$_GET["tipo"];

	if($idTipo==1)
	{
		//SELECCION
		?>
            
            <tr>
            <td><input type="radio" value="Si" checked="checked" disabled="disabled">Si</td>
            <td><input type="radio" value="No" disabled="disabled">No</td>
            </tr>
			<?php
		}
	if($idTipo==2){
		//INCREMENTAL
		?>
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
	if($idTipo==3){
		//ABIERTA
		?>
        	<tr>
            	<td>
                	<textarea disabled="disabled">Escriba su texto aqu&iacute </textarea>
                </td>
            </tr>
        
        <?php
		}
?>
</table>
