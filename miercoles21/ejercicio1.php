<?php


//$con=new mysqli("10.10.10.199","alfonso","123456","examen");
$con=new mysqli("10.10.10.106","clase","1234","jueves22"); //Gladys

$sql="SHOW COLUMNS FROM alumnos";

$ejecutar=$con->query($sql);

$campos="";
$arrayc=array();
foreach($ejecutar as $c)
{
	$campos.=$c["Field"].",";
	array_push($arrayc,$c["Field"]);
}

$campos=substr($campos,0,-1);
echo "$campos <br>";



$sqlgrabar="INSERT INTO alumnos ($campos) VALUES (NULL,'Dani ','a@a.com','1234')";

if($ejecutargraba=$con->query($sqlgrabar))
{
	echo "Grabado <br>";
}
ELSE
{
	echo "No Grabado<br>";
}




$sqlconsulta="SELECT * FROM alumnos";
$ejecutarcon=$con->query($sqlconsulta);

foreach($ejecutarcon as $registro)
{
	foreach($arrayc as $loquesea)
	{
		$nom=$registro[$loquesea];
		echo "$nom";
	}
	echo "<br>";	
}





?>