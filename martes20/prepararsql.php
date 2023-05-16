<?php


$array1=array("nom_alu","ape_alu","tlf_alu","dir_alu","cp_alu","sex_alu");

$array2=array("nom_pro","des_pro","pre_pro");


$campos="";
foreach ($array1 as $a1)
{
	
	$campos.="$a1,";
	$camposlimpio=substr($campos,0,-1);
	
}


echo "<br>".$camposlimpio;

echo "<hr>";

$arrayd=array("Alfonso","Carro","981","Cambre","15679","Hombre");

$arrayd2=array("Boligrafo","Boligrafo bic","1€");


$valores="";

foreach($arrayd as $b1)
{
	$valores.="'$b1',";
	$valoreslimpio=substr($valores,0,-1);
}

echo $valoreslimpio;



// echo "INSERT INTO tabla ($campos) VALUES ($valores)";













?>