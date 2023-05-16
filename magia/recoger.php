<?php

$nom=$_POST["nombrepersona"];
$tlf=$_POST["tlfnpersona"];


$servidor="localhost";
$usuario="root";
$contrasena="";
$basededatos="magia";


$conexion= new mysqli($servidor,$usuario,$contrasena,$basededatos);

$sql="INSERT INTO personas(nombre,telefono) values ('$nom','$tlf')";

$conexion->query($sql);

?>