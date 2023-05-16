<h1>Estas en consulta</h1>

<?php
//es necesario recibir los datos que se solicitan en php, por eso utilizaremos un condicional,
//porque sí en php pedimos algun valor que no se ha enviado via GET, dará un error:


switch($comp=$_GET["comprobar"])

{
	

case 1: echo "No recibe nada";
		break;
		//este podria omitirlo y acabarlo en default
		
case 2: 
		$dni=$_GET["dni"];
		break;
case 3:
		$nombre=$_GET["nom"];
		$apellido=$_GET["ape"];
		break;
case 4:
		$edad=$_GET["edad"];
		$tlf=$_GET["telefono"];
		$sex=$_GET["sexo"];
		break;
}


?>