<?php

$conexion= new mysqli("localhost","root","","agrupaciones");
$sql="SELECT * FROM estudios GROUP BY nom_est";
$ejecutar=$conexion->query($sql);

foreach ($ejecutar as $registro)
    {
        echo $registro["nom_est"]." <br>";
    }
?>