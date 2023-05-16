<?php


$n=$_POST["nom"];
$a1=$_POST["ap1"];
$a2=$_POST["ap2"];

$conexion=new mysqli("localhost","root","","real");
$sql="INSERT INTO clientes (nom_cli, ap1_cli,ap2_cli) VALUES ('$n','$a1','$a2')";

if($conexion->query($sql))
{
    echo "Grabado";
}
else
{
    echo "No Grabado";
};


?>