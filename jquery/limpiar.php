<?php

$numero=$_POST["reset"];
include("./conexion.php");
//$conexion= new mysqli("10.0.0.251","root","root","click");

$sql="SELECT * FROM botones";
$ejecutar=$conexion->query($sql);

foreach($ejecutar as $registro)
{
$sqlactualizar="UPDATE botones SET cant_bot = '$numero'";
$conexion->query($sqlactualizar);
};
?>