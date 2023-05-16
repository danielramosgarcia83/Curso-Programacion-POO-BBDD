<?php

//graba de formulario provincias

$nombre=$_POST["npro"];

$conexion= new mysqli("localhost","root","","lunes5");

$sql="INSERT INTO provincias(nombre_pro) VALUES('$nombre')";

if($conexion->query($sql))
{
	echo "Provincia Grabada";
}
else
{
	echo "Ocurrio un error";
}
?>