<?php
//recoger el dato que me manda el jquery por POST
$textoboton = $_POST["dato"];
//me conecto a la BD
$conexion = new mysqli("localhost","root","","clics");

//no se encuentra el registro POR TANTO lo tengo que crear
$haz = "INSERT INTO acciones (nom_acc, num_pul) VALUES ('$textoboton',1)";
		
$conexion->query($haz);
	
?>