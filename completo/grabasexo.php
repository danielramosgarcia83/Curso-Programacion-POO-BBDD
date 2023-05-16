<?php

//graba de formulario sexo

$nombre=$_POST["nsexo"];

//conexion BD

$conexion= new mysqli("localhost","root","","lunes5");


//vamos a crear el SQL de consulta para ver si existe o no ya en la tabla

$sqlconsulta="SELECT * FROM sexos WHERE nombre_sex='$nombre'";

//ejecucion $sqlconsulta y guardamos en una variable:

$ejecutar=$conexion->query($sqlconsulta);

//ahora preguntar sí puede ordenar datos (fetch_array)


if($ejecutar->fetch_array())
{
	echo "Ya existe";
}
else
{
	//no ha encontrado, debemos guardar
	//creamos sql para grabar
	$sqlgraba="INSERT INTO sexos (nombre_sex) values ('$nombre')";
	//ejecutamos "sqlgraba" y preguntar sí lo hizo correctamente o no.
	if($conexion->query($sqlgraba))
	{
		echo "Grabado correctamente";
	}
	else
	{
		echo "Ocurrio un error";
	}
	
}



?>