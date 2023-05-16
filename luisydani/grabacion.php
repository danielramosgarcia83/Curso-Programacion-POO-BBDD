<?php

//recibimos del formulario nombre y contraseña

$nom=$_POST["nombre"];
$pass=$_POST["password"];


$fecha=date("Y-m-d");
$hora=date("h:i:s");

//Encriptado de la contraseña:

$passen=password_hash($pass,PASSWORD_DEFAULT);

//fecha y hora del sistema

//nos conectamos
$conexion=NEW mysqli("10.10.10.104","escuela","12345","luisydani");

//grabamos en la base de datos

$sqlgrabacion="INSERT INTO usuarios (nom_usu,pass_usu,fecha_usu,hora_usu) VALUES ('$nom','$passen','$fecha','$hora')";

//EJECUTAMOS LA GRABACION

$conexion->query($sqlgrabacion);

?>
