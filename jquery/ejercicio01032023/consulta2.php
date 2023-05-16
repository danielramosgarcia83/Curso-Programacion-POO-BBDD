<?php

$conexion = new mysqli("localhost","root","","clics");

$sql="SELECT * FROM acciones";
$ej=$conexion->query($sql);
/*
$registro=$ej->fetch_array();
//var_dump($registro);

do
{
    $cod=$registro["cod_acc"];
    $nom=$registro["nom_acc"];
    $num=$registro["num_pul"];
    echo "$cod - $nom - $num <br>";
}
while ($registro=$ej->fetch_array());
*/

//aqui salta antes de pintar, te saltarias un registro en una consulta booleana.
while ($registro=$ej->fetch_array())
{
    $cod=$registro["cod_acc"];
    $nom=$registro["nom_acc"];
    $num=$registro["num_pul"];
    echo "$cod - $nom - $num <br>";
}

$conexion->close();
?>