<?php

	//recoger el dato que me manda el jquery por POST
	$textoboton = $_POST["dato"];
	//me conecto a la BD
	$conexion = new mysqli("localhost","root","","clics");	
	$haz = "UPDATE acciones SET num_pul = num_pul + 1 WHERE nom_acc='$textoboton'";
	$conexion->query($haz);


?>