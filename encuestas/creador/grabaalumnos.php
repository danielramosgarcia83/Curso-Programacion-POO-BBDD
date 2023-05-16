<?php

$ema=$_POST["email"];
$pass=password_hash($_POST["password"],PASSWORD_DEFAULT);


$conexion=NEW mysqli("10.10.10.199","escorpion","1234","encuestas");

$sql="INSERT INTO alumnos (email_alu,pass_alu) VALUES ('$ema','$pass')";

if($conexion->query("$sql"))
{
    echo "Grabado!";
}
else
{
    echo "error, no grabado";
}

?>