<?php


//vamos a conocer los campos de una tabla.

$conexion=new mysqli("10.10.10.199","Medellin","1234","martes20");
$sql="SHOW COLUMNS FROM personas";
$ejecutar=$conexion->query($sql);

$cbd=array();

foreach($ejecutar as $campo)

{
	array_push ($cbd,$campo["Field"]);
	echo $campo["Field"]."<br>";
	
}

//var_dump($cbd);



$campos="";
foreach($cbd as $c)
{
	$campos.="$c,";
}
$campos=substr($campos,0,-1);
echo $campos;

$valores="'Dani2','Coruña','Carral','15175','d@d.com','1324',";

$sqlgraba="INSERT INTO personas ($campos) VALUES (NULL, $valores)";

if($conexion->query($sqlgraba))
{
	echo "grabado";
}
else
{
	echo "No grabado";
}
	
	















// foreach($ejecutar as $campo)

// {
	
	// echo $campo["Field"]."<br>";
// }





?>