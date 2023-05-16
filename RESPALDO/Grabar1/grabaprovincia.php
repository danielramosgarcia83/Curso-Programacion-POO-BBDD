<?php


//recoger datos formulario

$provincia=$_POST["nprovincia"];

//conectar con BBDD

$conexion=new mysqli("localhost", "root", "", "rompecabezas");

//Escribimos en lenguaje sql de la BBDD el volcado de datos a la tabla que queremos
//INSERT INTO nombretabla (campo,campo) VALUES ('$dato",'$dato');

$sql="INSERT INTO provincias(nombre) values ('$provincia')";

//ejecutar sql en la conexion creada


//$conexion->query($sql);

	if($conexion->query($sql))
	{
		echo "Se ha grabado";
		echo "<button onclick='window.location.href=`formularioprovincia.html`'>volver</button>";
		
	}
	else
	{
		echo "No se ha grabado";
		echo "<a href='formularioprovincia.html'>Volver</a>";
	}



?>