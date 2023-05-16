<?php

	//creamos 2 variables:
	
	$num1=8;
	$num2=5;
	
	$multi=$num1*$num2;
	
	//if anidados
	
	if($multi>40)
	{
		//parte positiva
		echo "Es mayor a 40";
	}
	else
	{
		//parte negativa
		if($multi==40)
		{
			echo "Es igual a 40";
		}
		else
		{
			echo "Es menor que 40";
		}
	}

?>