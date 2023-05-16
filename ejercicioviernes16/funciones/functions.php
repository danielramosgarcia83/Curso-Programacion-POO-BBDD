<?php //una tabla completa

function tabla($border,$filas,$columnas,$relleno)
{
		
echo "<table border=$border>";

	for($i=1;$i<=$filas;$i++)
	
	{
		echo "<tr>";
			for ($j=1;$j<=$columnas;$j++)
			
			{
				echo"<td>$relleno</td>";
			}
		
		echo"</tr>";

	}
	

echo "</table>";
		
}

?>


<?php //Tabla por partes

function inicio_tabla($border)
{
	echo "<table border=$border>";
}
function fin_tabla()
{
	echo "</table>";
}
function inicio_fila()
{
	echo"<tr>";
}
function fin_fila()
{
		echo"</tr>";
}
function pinta_celda($columna,$texto)
{
	if($columna=="" || $columna==0) // para poner Y se usa & y para poner O se usa ||
	{
			echo "<td>$texto</td>";

	}
	else 
	{
		echo "<td colspan='$columna'>$texto</td>";
	}
}

?>

