<?php


$variable="javier";

//primera letra en MAYUSCULA

$variableprimeramayus=ucfirst($variable);

echo "$variableprimeramayus";

echo "<br>";

//Todo MAYUSCULA

$variabletodomayus=strtoupper($variable);

echo "$variabletodomayus";


//TODO minuscula

echo "<br>";

echo strtolower ($variabletodomayus); //esta es una forma directa, sin guardar en variable


echo "<br>";

$variabletodominus=strtolower($variabletodomayus);

echo "$variabletodominus";


echo "<br>";


//mayuscula la primera de cada palabra

$variable2="jose maria";

$variableprimeramayuscadapalabra=ucwords($variable2);

echo "$variableprimeramayuscadapalabra";

//eliminar espacios en blanco del principio o final:

trim($variable); 

//eliminar espacios en blanco del principio:

ltrim($variable); 

//eliminar espacios en blanco al final:

rtrim($variable); 


//$nombre=ucfirst(trim($_POST["nombre"])); ya más avanzado

//_________________________________________________________//

//Encriptado base64


echo "<br><br>";

$nombre="Daniel";

$nombreencriptado=base64_encode($nombre);

echo "$nombreencriptado";


echo "<br><br>";
//desencriptar base64

$nombredessencriptado=base64_decode($nombreencriptado);

echo "$nombredessencriptado";


?>