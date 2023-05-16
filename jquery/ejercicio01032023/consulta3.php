<?php

$conexion = new mysqli("localhost","root","","clics");

$sql="SELECT * FROM acciones";
$ej=$conexion->query($sql);

$registro=$ej->fetch_assoc();

var_dump($registro);

$ej->free_result();
$conexion->close();

?>