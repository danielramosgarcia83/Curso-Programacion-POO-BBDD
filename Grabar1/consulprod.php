<?php

$nprod=$_POST["consulta"];

$conexion=new mysqli("localhost","root","","rompecabezas");

$sql="SELECT * FROM productos WHERE nombre='$nprod'";

$ejecutar=$conexion->query($sql);

if($ejecutar->fetch_array())
{
	foreach($ejecutar as $registro)
	{
		$cod=$registro["codigo"];
		$prod=$registro["nombre"];
		$desc=$registro["descripcion"];
		
		echo "$cod - $prod - $desc <br>";
	}
}
else
{
	echo "No hay registro";
}












?>