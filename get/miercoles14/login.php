<?php

$ema=$_POST["emilio"];
$pass=$_POST["contra"];

$conexion=new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$sqlconsulta="SELECT * FROM usuarios WHERE email_usu='$ema' AND pass_usu='$pass'";
$ejecutarconsulta=$conexion->query($sqlconsulta);

if($registro=$ejecutarconsulta->fetch_array())
{
	//regitro existe
	$codusuario=$registro["cod_usu"];
	//arrancamos sesion, dura mientras el navegador este abierto!
	session_start();
	$_SESSION["pegatina"]=$codusuario; // variables de sesion(pegatina)
	

	//lo redirigimos automaticamente
	header("location:indexprivado.php");
	
}
else
{
	//no existe este registro
	echo "Email o password incorrectos";
}

?>