<?php

$sex=$_POST["sexo"];

switch($sex)
{
	case 0:
			echo "Es Hombre";
			break;
			
	case 1:
			echo "Es Mujer";
			break;

	case 2:
			echo "Otro";
			break;

}



?>