<?php

//recibimos los datos del formulario

$nom=$_POST["nombre"];
$email=$_POST["email"];
$pas=$_POST["password"];
$cod=$_POST["codigo"];

$con=new mysqli ("10.10.10.106","clase","1234","jueves22");

$sql="UPDATE alumnos SET nom_alu='$nom', email_alu='$email', pass_alu='$pas' WHERE cod_alu='$cod'";

//ejecutar el sql preguntando

if($con->query($sql))
{
	
	echo "Actualizado<br>";
	//echo"<a href='index.php'>Volver</a>"; con este vas al index
	echo"<a href='formmodif.php?codigo=$cod&index=1'>Volver</a>"; //con este vas de vuelta al valor modificado PERO ya actualizado
	
	
}
else
{
	echo "No actualizado";
	echo"<a href='index.php'>Volver</a>";
}


?>