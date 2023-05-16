<?php

$nomcat=$_POST["ncat"];
$nomcatmayus=ucfirst($nomcat);

$servidor="10.10.10.108";
$usuario="escuela";
$password="1234";
$basedatos="tienda";


// $servidor="localhost";
// $usuario="root";
// $password="";
// $basedatos="tienda";



$conexion=new mysqli($servidor,$usuario,$password,$basedatos);

$sqlconsulta="SELECT nombre_cat FROM categorias WHERE nombre_cat='$nomcatmayus'";
$ejecutar=$conexion->query($sqlconsulta);


if ($ejecutar->fetch_array())
{
	echo "La categoria ya existe";
	echo "<br>";
	
}
else
{

	$sqlgraba="INSERT INTO categorias (nombre_cat) values ('$nomcatmayus')";
	$conexion->query($sqlgraba);
	echo "Categoria registrada";
	
}
echo "<button onclick='window.location.href=`formcat.html`'>Volver</button>";
echo "<br>";

$sqlvercat="SELECT * FROM categorias";
$ejecutarcver=$conexion->query($sqlvercat);

foreach($ejecutarcver as $registro)

{
	$vercat=$registro["nombre_cat"];
	echo "$vercat <br>";
}
	




?>