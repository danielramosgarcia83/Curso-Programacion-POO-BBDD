<?php


// recoger datos

$filas=$_POST["nfilas"];
$columnas=$_POST["ncolumnas"];
$relleno=$_POST["relleno"];

//crear tabla

echo "<table border=1>";

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

?>