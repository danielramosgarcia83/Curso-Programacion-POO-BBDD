<?php
$con=new mysqli("10.10.10.199","alfonso","123456","examen");

$sqlcol="SHOW COLUMNS FROM empleados";
$ejecutarcolumnas=$con->query($sqlcol);

$arrayc=array();

echo "<table border=1> <tr style=background-color:blue; color:red>";

foreach($ejecutarcolumnas as $columnas)
{
	array_push($arrayc,$columnas["Field"]);
	echo "<td><b><center><font color='red'>".$columnas["Field"]."</font></center></b></td>";
}
echo "</tr> ";

$sqlconsulta="SELECT * FROM empleados";
$ejecutarconsulta=$con->query($sqlconsulta);

foreach ($ejecutarconsulta as $registro)
{
	echo "<tr>";
	foreach($arrayc as $camposa)
	{
		echo "<td>".$registro[$camposa]."</td>";
	}
	
echo "</tr>";	
}
echo"</table>";
?>