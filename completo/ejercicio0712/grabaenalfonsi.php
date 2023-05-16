<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];

$nombreencrip=base64_encode($nombre);
$apellidoencrip=base64_encode($apellido);

//$conexion= new mysqli("10.10.10.199","todos","1234","lunes5");
$conexion= new mysqli("localhost","root","","lunes5"); //servidor local


$sqlconsulta="SELECT nomencri_alu,apeencri_alu FROM alumnos WHERE nomencri_alu='$nombreencrip' AND apeencri_alu='$apellidoencrip'";
$ejecutar=$conexion->query($sqlconsulta);

if($ejecutar->fetch_array())
{
	echo "ya existe";
}
else
{
	
$sqlgraba="INSERT INTO alumnos (nom_alu,ape_alu,nomencri_alu,apeencri_alu) values('$nombre','$apellido','$nombreencrip','$apellidoencrip')";
$conexion->query($sqlgraba);

	echo "Registrado";
}








?>