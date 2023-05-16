<?php


//Hasta ahora

$alumnos1="Pablo";
$alumnos2="javier";
$alumnos3="Dino";

//En vez de esto, tantas variables, mejor un contenedor, un array, con un nombre


$alumnos=array("Pablo","Javier","Dino");
//$alumnos=array("alumnos1","alumnos2","alumnos3"); Otra forma de array

echo var_dump($alumnos); //vuelco del contenido sin que sea un eco

echo "<br>";

echo "$alumnos[0]";echo "<br>"; //puede ir con o sin comillas el ECHO cuando es una variable
echo $alumnos[1];echo "<br>";
echo $alumnos[2];echo "<br>";
// echo $alumnos[3]; daria error, no hay posicion 3

//sacar datos con bucle "FOREACH"

foreach($alumnos as $alumnito)
{
	echo $alumnito; //sacamos 1 registro en pantalla de cada registro, de cada vuelta
		
}

echo "<br>";
//Como hacemos con el bucle "FOR"


for($i=0;$i<3;$i++)

{
	echo $alumnos[$i];
}
echo "<br>";

//Como hacemos con el bucle "WHILE"

$cont=0;
while($cont<3)
{
	echo $alumnos[$cont];
	$cont++;
	
}
echo "<br>";

//que pasa cuando no sabemos las posiciones que hay en un array

echo count($alumnos);
echo "<br>";
//ahora un while

$cont=0;
while($cont<count($alumnos))
{
	echo $alumnos[$cont];
	$cont++;
}

echo "<hr>";






$coches=array("Renault","KIA","Mitsubishi","Mercedes");


//añadir un elemento a UN SOLO array

$coches[]="mazda";

array_push($coches,"peugeot");

echo "<hr>";


$numeros=array();
$cont=1;
while($cont<=1)
	
{
array_push($numeros,$cont);
$cont++;

}

echo var_dump($numeros);




?>