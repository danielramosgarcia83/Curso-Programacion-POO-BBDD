<?php



function pintaycalcula($nom,$ano)
{
	
	echo "$nom";
	calculo_edad($ano);
	
}

function calculo_edad($anonacimiento)
{
	$hoy=date("Y");
	$hoytienes = $hoy-$anonacimiento;
	echo "tienes $hoytienes anos";
		
}

//otra forma mas avanzada
// function pintaycalcula($nom,$ano)
// {
	
	// echo "$nom", edad($ano);
	
// }

// function edad($ed)
// {
	// $hoy=date("Y");
	// return $hoy-$ed;
		
// }


// ?>