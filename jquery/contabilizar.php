<?php

$cod=$_POST["codigo"];

include("./conexion.php");
//$conexion= new mysqli("10.0.0.251","root","root","click");


$sqlsumar="UPDATE botones
SET cant_bot = cant_bot+1
WHERE cod_bot='$cod'";

$conexion->query($sqlsumar);



$sqlconsulta="SELECT * FROM botones WHERE cod_bot='$cod'";

$ejecutar=$conexion->query($sqlconsulta);
$registro=$ejecutar->fetch_array();

$nombre=$registro["nom_bot"];
$cant=$registro["cant_bot"];

echo "$nombre $cant"."veces";
?>


