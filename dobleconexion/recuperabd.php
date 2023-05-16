<?php

$conexionA=NEW mysqli("10.10.10.199","fila3","1234","fila3");
$conexion=NEW mysqli("10.10.10.113","fila3","1234","fila3");

$sqlconsulta="SELECT * FROM clientes";


$ejecutar=$conexion->query("$sqlconsulta");

foreach ($ejecutar as $registro)
{
    $ema=$registro["email_cli"];
    $sqlconsulta1="SELECT * FROM clientes WHERE (email_cli='$ema')";
    $ejecutarA=$conexionA->query("$sqlconsulta1");

    if($ejecutarA->fetch_array())
    {

        echo "==>$ema<== <b>Este email Existe</b> <br>";
    }

    else

    {
    
    $nom=$registro["nom_cli"];
    $ema=$registro["email_cli"];
    $pass=$registro["pass_cli"];
    $sqlgrabacion="INSERT INTO clientes (nom_cli,email_cli,pass_cli) VALUES ('$nom','$ema','$pass')";
    if($conexionA->query($sqlgrabacion))
    {
        echo "grabado";
    }

    }
}




?>