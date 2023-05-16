<?php

$email=$_POST["email"];
$password=$_POST["password"];
$conex=new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
$sqlconsulta="SELECT * FROM usuarios WHERE email_usu='$email'";
$ejecutarcon=$conex->query($sqlconsulta);
if($registro=$ejecutarcon->fetch_array())
{
		if(($passusu=$registro["pass_usu"])==$password)
		{
			if(($activousu=$registro["activo_usu"])==0)
			{
				echo "PUEDES ENTRAR";
				$codusu=$registro["cod_usu"];
				session_start();
				$_SESSION["pegatina"]=$codusu;
				header("location:indexprivado.php");
			}
			else
			{
				echo "USUARIO INACTIVO";
			}
		}
		else
		{
			echo "ERROR CONTRASEÑA";
		}
}
else
{
	echo "No existe este usuario";
}
?>