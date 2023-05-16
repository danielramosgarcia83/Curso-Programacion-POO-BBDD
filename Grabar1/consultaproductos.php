<?php

$conexion=new mysqli("localhost","root","","rompecabezas");


$sql="SELECT * FROM productos ORDER BY nombre ASC LIMIT 1";

$ejecutar=$conexion->query("$sql");


foreach($ejecutar as $registro)
{
	$cod=$registro["codigo"];
	$nom=$registro["nombre"];
	$des=$registro["descripcion"];


echo "$cod - $nom - $des <br>";
}
"
?>