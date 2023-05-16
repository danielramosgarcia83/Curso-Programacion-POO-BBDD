<?php

$nom=$_POST["nombre"];
$ape=$_POST["apellido"];
$dir=$_POST["direccion"];
$valores="'$nom','$ape','$dir'";

$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$sqlcol="SHOW COLUMNS FROM empleados";
$ejecutarcolumnas=$con->query($sqlcol);

$campos="";
$arrayc=array();

foreach($ejecutarcolumnas as $columnas)
{
	$campos.=$columnas["Field"].",";
	array_push($arrayc,$columnas["Field"]);
}
echo "<br>";
echo $campos;
$campos=substr($campos,0,-1);
echo "<br>";
echo $campos;
echo "<br>";
echo "<br>";
var_dump($columnas);
echo "<br>";


$sqlgrabar="INSERT INTO empleados ($campos) VALUES (NULL,$valores)";
if($ejecutargraba=$con->query($sqlgrabar))
{
	echo "Grabado";
}
else
{
	echo "No Grabado";
}

$sqlconsulta="SELECT * FROM empleados";
$ejecutarconsulta=$con->query($sqlconsulta);


foreach ($ejecutarconsulta as $registro)
{
	foreach($arrayc as $camposa)
	{
		$datos=$registro[$camposa];
		echo "$datos";
	}
	echo "<br>";
}





?>


