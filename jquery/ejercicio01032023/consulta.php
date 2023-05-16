<?php

$conexion = new mysqli("localhost","root","","clics");
$sql = "SELECT * FROM acciones";
$ej = $conexion->query($sql);

$totalclicks=$ej->num_rows;

$sql="SELECT * FROM acciones WHERE nom_acc='Contacto'";
$ej=$conexion->query($sql);
$ej->num_rows;

$sql="SELECT * FROM acciones WHERE nom_acc='Historia'";
$ej=$conexion->query($sql);

if($ej->num_rows>0)
{
    //existen
}
else
{

}


?>