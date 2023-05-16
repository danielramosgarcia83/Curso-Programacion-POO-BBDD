<?php

//conexion BD
$conexion=new mysqli("localhost","root","","rompecabezas");


//Consulta generica para todos los registros, sin filtrados, sin condicion

$sql="SELECT * FROM provincias";

//en la consulta necesitamos guardar la ejecucion en una variable

$ejecutar=$conexion->query($sql);

//vamos a crear un bucle con foreach para recorrer la variable ejecutar:


foreach($ejecutar as $registro) 
{
	//bucle para recorrer c/valor de los registros c/vuelta, luego extraer valores de $registro
	$cod=$registro["codigo"];
	$nom=$registro["nombre"];
	//ahora mostrar en pantalla
	
	echo "$cod - $nom <br>";
	
}





?>