<?php

$nom=$_POST["nombre"];
$ema=$_POST["email"];
$pass=$_POST["password"];

$conexion=NEW mysqli("localhost","root","","ejercicio1402");

$sqlconsulta="SELECT * FROM usuarios WHERE email_usu='$ema'";
$ejecutar=$conexion->query($sqlconsulta);
if($ejecutar->fetch_array())
{
    echo "email existe";
}
else
{
    
    $sql="INSERT INTO usuarios (nom_usu,email_usu,pass_usu) VALUES ('$nom','$ema','$pass')";
    $conexion->query($sql);
    echo "registrado";
}
?>