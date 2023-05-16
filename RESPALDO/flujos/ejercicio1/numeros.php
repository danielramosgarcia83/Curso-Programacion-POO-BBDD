<?php
$numero1=$_POST["num1"];
$numero2=$_POST["num2"];
$suma = $numero1+$numero2;
$multi=$numero1*$numero2;

echo "Tu primer numero es '$numero1'";
echo "<br>";

echo "Tu segundo numero es '$numero2'";
echo "<br>";

echo "La suma de los numeros $numero1 y $numero2 es $suma"; //suma

echo "<br>";

echo "La multiplicacion de los numeros $numero1 y $numero2 es $multi"; //multiplicacion

echo "<br>";

if($multi>100) // Condicional, si >100 "BINGO", <"LINEA", sino "IGUALES"
{
	echo "BINGO";
}
else
{
	if($multi<100)
	{
		echo "LINEA";	
	}
	else
	{
		echo "IGUALES";
	}
}



?>