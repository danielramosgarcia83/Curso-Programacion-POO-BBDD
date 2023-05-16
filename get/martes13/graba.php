<?php
$simbolo=$_GET["operacion"];
$valor1=$_POST["n1"];
$valor2=$_POST["n2"];
switch($simbolo)
{
	case "suma":
				$operador="+";
				$resultado=$valor1+$valor2;
				
		break;
	
	case "resta":
				$operador="-";
				$resultado=$valor1-$valor2;
		break;
		
		case "multiplicacion":
				$operador="*";
				$resultado=$valor1*$valor2;
		break;
	
	case "division":
				if($n2<=0)
				{
					$resultado="Error";
				}
				else
				{
				$operador="/";
				$resultado=$valor1/$valor2;

				}
		break;
}
echo "$resultado";
?>