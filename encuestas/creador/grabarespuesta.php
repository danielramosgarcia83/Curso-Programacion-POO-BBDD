<?php
$codigo=$_POST["pregunta"];

$con=NEW mysqli("localhost","root","","encuestas");
//$con=NEW mysqli("10.10.10.199","escorpion","1234","encuestas");
for($i=1; $i <=3; $i++)

	{
		$sql="INSERT INTO respuestas (cod_pre,respuesta_res,correcta_res)
		VALUES ('$codigo','".$_POST["respuesta$i"]."','".$_POST["correcta$i"]."')";
		$con->query("$sql");
	}
	?>

