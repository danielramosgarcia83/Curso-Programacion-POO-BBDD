<?php

$palabra=$_POST["dato"];
$conexion=new mysqli("localhsot","root","","real");
$sql="SELECT * FROM clientes WHERE nom_cli LIKE '%$palabra%'"; //%ES UN COMODIN, que aparezca cualquier cosa antes y despues del %
$ejecutar=$conexion->query($sql);

foreach ($ejecutar as $registro)

{
    $nom=$registro["nom_cli"];
    $ap1=$registro["ap1_cli"];
    $ap2=$registro["ap1_cli"];
    echo "$nom - $ap1 - $ap2 |";
}


?>