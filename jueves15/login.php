<?php

$email=$_POST["email"];
$password=$_POST["password"];

$conexion=new mysqli ("10.10.10.199","cachimba","pelicano","ejercicio");

$sql="SELECT * FROM usuarios WHERE email_usu='$email'";
$ejecutar=$conexion->query($sql);
if($registro=$ejecutar->fetch_array())
{
		$passwordusu=$registro["pass_usu"];

		if($passwordusu==$password)
		{
			echo "ESTAS DENTRO";
			//header("location:xxxxx.php");
		}
		else
		{
			echo "PASSWORD INCORRECTO";
		}
}
else
{
		echo "EMAIL INCORRECTO";
}
?>