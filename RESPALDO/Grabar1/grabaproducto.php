<?php

$producto=$_POST["nproducto"];
$descripcion=$_POST["ndescripcion"];

$conexion=new mysqli("localhost","root","","rompecabezas");

$sql="INSERT INTO productos (nombre,descripcion) values('$producto','$descripcion')";

	if($conexion->query($sql))
	{
		echo "Grabado";
		echo "<button onclick='window.location.href=`formularioproducto.html`'>VOLVER</button>";
	}
	else
	{
		echo "No Grabado";
	}











?>