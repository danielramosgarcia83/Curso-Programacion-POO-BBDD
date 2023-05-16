<?php

$codigo=$_POST["cod"];

$conexion= new mysqli("10.10.10.199","bareto","1234","bar");
$sql="SELECT * FROM personas WHERE cod_per='$codigo'";
$ejecutar=$conexion->query($sql);


$registro=$ejecutar->fetch_array();

$estado=$registro["estado_per"];

if ($estado=="Abierto") {
    
    $sqlactualizar="UPDATE personas SET estado_per = 'Cerrado' WHERE cod_per='$codigo'";

}
else
{
    $sqlactualizar="UPDATE personas SET estado_per = 'Abierto' WHERE cod_per='$codigo'";
}

$conexion->query($sqlactualizar);
?>