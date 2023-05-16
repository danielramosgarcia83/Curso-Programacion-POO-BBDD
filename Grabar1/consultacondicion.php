<?php


$nom="Lugo";

$conexion=new mysqli("localhost","root","","rompecabezas");

$sql="SELECT * FROM provincias WHERE nombre= '$nom'";

$ejecutar=$conexion->query($sql);

//Preguntar si puede ordenar datos en array con $ejecutar


if($ejecutar->fetch_array())
//hay datos

{
	foreach($ejecutar as $registro)
	
		$cod=$registro["codigo"];
		$nompro=$registro["nombre"];
		echo "$cod - $nompro <br>";
}

else
//no hay datos

{
	echo "No hay registros";
}


?>