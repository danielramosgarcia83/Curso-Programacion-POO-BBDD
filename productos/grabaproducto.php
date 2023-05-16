<?php


$servidor="10.10.10.108";
$usuario="escuela";
$password="1234";
$basedatos="tienda";


// $servidor="localhost";
// $usuario="root";
// $password="";
// $basedatos="tienda";

$catpro=$_POST["categoria"];
$nompro=$_POST["nombrepro"];
$despro=$_POST["Descripción"];
$precio=$_POST["precio"];


$conexion=new mysqli($servidor,$usuario,$password,$basedatos);

$sql="INSERT INTO productos (codigo_cat,nombre_pro,descripcion_pro,precio_pro) VALUES ('$catpro','$nompro','$despro','$precio')";

if($conexion->query($sql))
{
	echo "Producto grabado";
}
else
{
	echo "Error";
}

echo "<button onclick='window.location.href=`formpro.php`'>Volver</button>";










?>