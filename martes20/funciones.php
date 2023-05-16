<?php


//conexion

function graba($tabla,$campos,$valores)
{
	//$conexion=new mysqli("10.10.10.199","Medellin","1234","martes20");
	$conexion=new mysqli("localhost","root","","martes20");
	$sql="INSERT INTO $tabla ($campos) VALUES ($valores)";
	
	if($conexion->query($sql))
	{
		echo "<br>"."Grabado bien";
	}
	else
	{
		echo "<br>"."No grabado";
	}
}




?>