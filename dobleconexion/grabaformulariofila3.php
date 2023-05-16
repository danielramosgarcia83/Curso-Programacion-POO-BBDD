<?php

$nom=$_POST["nombre"];
$ema=$_POST["email"];
$pass=password_hash($_POST["password"],PASSWORD_DEFAULT);

$conexionA=NEW mysqli("10.10.10.199","fila3","1234","fila3");
$conexion=NEW mysqli("10.10.10.113","fila3","1234","fila3");


$sqlconsulta="SELECT * FROM clientes WHERE (email_cli='$ema')";

$ejecutar=$conexion->query("$sqlconsulta");
$ejecutarA=$conexionA->query("$sqlconsulta");

    if($ejecutar->fetch_array() && $ejecutarA->fetch_array())

    {
        echo "Ya existe este correo!";
    }

    else
    {

    $sql="INSERT INTO clientes (nom_cli,email_cli,pass_cli) VALUES ('$nom','$ema','$pass')";
        IF($conexionA->query("$sql") && $conexion->query("$sql"))
        {
            echo "Grabado";
        }
        else
        {
            Echo "Error, no grabado";
        }

    }
?>