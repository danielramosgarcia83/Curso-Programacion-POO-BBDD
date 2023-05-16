<?php

$codigo=$_POST["pregunta"];


$con=NEW mysqli("localhost","root","","encuestas");
//$con=NEW mysqli("10.10.10.199","escorpion","1234","encuestas");
for($i=1; $i < 4; $i++)

	{
		//${"respuesta".$i}=$_POST["respuesta$i"]; con esta si queremos crear todas las variables
		
		//con esta solo la ultima, para registrar en la BD
		$res=$_POST["respuesta$i"];
		$res=$_POST["correcta$i"];
		
		
		
	//$sql="INSERT INTO respuestas (cod_pre,respuesta_res,correcta_res) VALUES ('$codigo','".${'respuesta'.$i}."','".${'correcta'.$i}."')"; directo 
	
	
	$sql="INSERT INTO respuestas (cod_pre,respuesta_res,correcta_res) VALUES ('$codigo','$res','$res')";

	//Utilizare una variable dinamica, representada con llaves y concatenamos una cadena con una variable ...".${"texto".$variable}."...

	if($con->query($sql))

		{
			if ($i==3)
			{
				echo "Grabado";
			}    
		}
	else
		{
			echo "No Grabado";
		}
	}
	?>

