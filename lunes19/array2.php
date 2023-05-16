<?php

$alumno1=array("Pablo","Gesto","Silla 1");
$alumno2=array("Javi","Anton","Silla 2");
$alumno3=array("Dino","Nuñez","Silla 3");


$clase=array($alumno1,$alumno2,$alumno3);

for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo $clase[$i][$j];
	}
	echo "<br>";
}

foreach ($clase as $persona)
{
	foreach ($persona as $personita)
	{
		echo "$personita";
	};
	echo "<br>";
}

?>