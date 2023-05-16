<?php

$cont=$_POST["contador"];
echo "Me llegan $cont ficheros <br><br>";

for($i=1;$i<=$cont;$i++)
{
	$nombre=$_FILES["archivo$i"]["name"];
	echo "$nombre <br>";
}

?>