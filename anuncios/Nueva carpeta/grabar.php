<?php

	//recoger el dato que me manda el jquery por POST
	$textoboton = $_POST["dato"];
	//me conecto a la BD
	$conexion = new mysqli("localhost","root","","clics");
	//Tenemos que comprobar si existe ya un registro con el nombre del botón
	$sqlbusca = "SELECT * FROM acciones WHERE nom_acc = '$textoboton'";
	//vamos a ejecutar la consulta
	$ejbusca = $conexion->query($sqlbusca);
	if($registrobusca = $ejbusca->fetch_array())
	{
		//se encontró el registro POR TANTO tengo que actualizar el dato
		$cod = $registrobusca["cod_acc"];
		$haz = "UPDATE acciones SET num_pul=num_pul+1 WHERE cod_acc='$cod'";
	}
	else
	{
		//no se encuentra el registro POR TANTO lo tengo que crear
		$haz = "INSERT INTO acciones (nom_acc, num_pul) VALUES ('$textoboton',1)";
	}	
	if($conexion->query($haz))
	{
		echo "bien";
	}
	else{echo "mal";}

?>