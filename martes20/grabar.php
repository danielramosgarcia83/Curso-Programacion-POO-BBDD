<?php
$array1=array("nom_per","prov_per","ciudad_per","cp_per","email_per","pass_per");
$array2=array("nom_cat","descri_cat");

$nombretabla="personas";
$personas="";
foreach($array1 as $camposper)
{
	$personas.="$camposper,";
}

$personascorregido=substr($personas,0,-1);
echo "<br>".$personascorregido;

$misdatos=array("Daniel","Coruna","Carral","15175","d@d.com","0000");

$valores="";
foreach($misdatos as $valorescat)
{
	$valores.="'$valorescat',";
}

$valorescorregido=substr($valores,0,-1);
echo "<br>".$valorescorregido;

include("funciones.php");
$nombretabla="personas";
graba($nombretabla,$personascorregido,$valorescorregido);


$nombretabla="categorias";
$categorias="";
foreach($array2 as $camposcat)
{
	$categorias.="$camposcat,";
}

$categoriascorregido=substr($categorias,0,-1);
echo "<br>".$categoriascorregido;



$miscategorias=array("Musica","Grounge");

$valores="";
foreach($miscategorias as $valorescat)
{
	$valores.="'$valorescat',";
}

$valorescorregido=substr($valores,0,-1);
echo "<br>".$valorescorregido;


graba($nombretabla,$categoriascorregido,$valorescorregido);



/////////Como es el mismo codigo para PERSONA/CATEGORIA, entonces aplicamos un FOR pero requiere conocimientos de "variables dinamicas", lo veremos mas adelante



/*

$tabla1="personas";
$tabla2="categorias";
$valores1=array("Daniel","Coruna","Carral","15175","d@d.com","0000");
$valores2=array("Musica","Grounge");

for ($i=1;$i<3;$i++)
{
	
	${"campos".$i}="";
	foreach(${"array".$i} as $c)
	{
		${"campos".$i}.="$c,";
	}
	
	${"valores".$i}="";
	foreach(${"valores".$i} as $v)
	{
		${"valores".$i}="'$v',";
	}
	
	${"campos".$i}=substr(${"campos".$i},0,-1);
	${"valores".$i}=substr(${"valores".$i},0,-1);
	graba(${"tabla".$i},${"campos".$i},${"valores".$i});
	
}

*/







?>