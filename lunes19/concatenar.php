<?php

//concatenado simple

$variable1="Hola";
$variable2="Pepito";
$concatenar="$variable1 $variable2";
$concatenar1=$variable1." ".$variable2;


$var="";

for($i=0;$i<10;$i++)
{
	$var.="Hola%";
}

echo $var."<br>";

//vamos a "romper" esa variable


$trozos=explode("%",$var);

echo $trozos[2];
echo "<br>";

echo "<hr>";



//EJERCICIO:
//Imprimir fecha bien.
//Una funcion que imprima "dia 19 de diciembre de 2022".

$fecha=date("Y-m-d");
echo $fecha;
echo "<br>";

$fechacorrecta=explode("-",$fecha);

$dia=$fechacorrecta[2];
$mes=$fechacorrecta[1];
$ano=$fechacorrecta[0];

echo $dia."/".$mes."/".$ano;

echo "<br>";

function saber_mes($nmes)
{
	$meses=array("Array meses","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	return $meses[$nmes];
}

$mesletra=saber_mes($mes);

echo "Dia ".$dia." de ".$mesletra." de ".$ano;




?>