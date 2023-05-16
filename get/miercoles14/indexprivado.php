<?php

//empezamos la sesión
session_start();

if(isset($_SESSION["pegatina"]))
{
	$codsuario=$_SESSION["pegatina"];
	//sacar dia sistema:
	$hoy=date("Y-m-d"); //Y mayuscula 4 dig. Y miniscula 2 dig
	
	//sacar hora sistema:
	
	$ahora=date("h:i:s"); //H mayusc formato 24hrs y es mejor, h minisc. 12hrs
	
	//capturar ip
	
	$ip=$_SERVER["REMOTE_ADDR"];
	
	$conexion=new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
	
	$sql="INSERT INTO accesos (cod_usu,dia_ace,hora_ace,ip_ace) VALUES ('$codsuario','$hoy','$ahora';'$ipnp')";
	
	$conexion->query($sql);
	
	echo "ESTAS DENTRO";
} 
else
{
	echo "NO TIENES PERMISOS PARA ESTAR AQUÍ";
}

?>