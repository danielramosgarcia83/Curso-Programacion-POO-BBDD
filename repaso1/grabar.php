<?php
		
$correo=$_POST["Email"];

$conexion=NEW mysqli("10.10.10.199","rata","1234","repasando");


$sql="INSERT INTO pachuli (Emilio) VALUES ('$correo')";


if($conexion->query($sql))
{
	echo "Grabado";
}
else
{
	echo "No Grabado";
}


?>
