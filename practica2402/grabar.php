<?php

$con=NEW mysqli("localhost","root","","practica");

$nom=$_POST["nombre"];
$ema=$_POST["email"];
$pass=password_hash($_POST["password"],PASSWORD_DEFAULT);
$pais=$_POST["nombre_pais"];
$pref=$_POST["num_pref"];
$num=$_POST["numero_tel"];
$num_completo="$pref"."$num";
echo "$num_completo";

$sql="INSERT INTO personas (nom_per,ema_per,pas_per,pais_per,tel_per)  
VALUES ('$nom','$ema','$pass','$pais','$num_completo')";
$con->query($sql);


?>