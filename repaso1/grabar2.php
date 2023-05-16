<?php
		
$pass=$_POST["PasworD"];
$ape=$_POST["Ap1"];

$conexion=NEW mysqli("10.10.10.199","rata","1234","repasando");

$sqlgraba="INSERT INTO clientes (pas,apellido1,vez) VALUES ('$pass','$ape',3)";

if($conexion->query($sqlgraba))
{
	echo "Grabado";
}
else
{
	echo "No Grabado";
}
?>
