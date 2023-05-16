<?php

$conexion= new mysqli("localhost","root","","agrupaciones");
$sql="SELECT DISTINCT nom_est FROM estudios";
$ejecutar=$conexion->query($sql);

foreach ($ejecutar as $registro)
    {
        echo $registro["nom_est"]." <br>";
    }
?>