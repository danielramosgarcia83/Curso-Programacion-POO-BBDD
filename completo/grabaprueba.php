<?php

$dato=$_POST["loquesea"];
$datoencrip=base64_encode($dato);
$conexion=new mysqli ("localhost","root","","lunes5");



$sql="INSERT INTO pruebas (texto_pru) VALUES('$datoencrip')";

if($conexion->query($sql))
{ //parte positiva
	echo "Grabado correctamente";
	echo "<button onclick='window.location.href=`formaltaprueba.html`'>Volver</button>";
}
else
{
	echo "No grabado";
	echo "<button onclick='window.location.href=`formaltaprueba.html`'>Volver</button>";
}






?>