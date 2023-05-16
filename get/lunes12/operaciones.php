<?php


$form=$_GET["form"];
$conexion=new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
//$conexion=new mysqli("localhost","root","","ejercicio");

switch($form)

{
	
	case 1: $nombre=$_POST["nombre"];
			$email=$_POST["email"];
			$sqlgraba="INSERT INTO alumnos (nom_alu,email_alu)VALUES('$nombre','$email')";
			$mensaje="Alumno Registrado";
			$tabla="alumnos";
			$campo1="nom_alu";
			$campo2="email_alu";
			$campocondicion=$nombre;
			break;
	
	case 2: $nombre=$_POST["nombre"];
			$horas=$_POST["horas"];
			$sqlgraba="INSERT INTO asignaturas (nom_asi,horas_asi)VALUES('$nombre','$horas')";
			$mensaje="Asignatura Registrada";
			$tabla="asignaturas";
			$campo1="nom_asi";
			$campo2="horas_asi";
			$campocondicion=$nombre;
			break;
	
	
}
	//consultar sí existe
	
	$sqlcomprobacion="SELECT * FROM $tabla WHERE $campo1='$campocondicion'";
	$ejecutarcomprobacion=$conexion->query($sqlcomprobacion);
	
	if($ejecutarcomprobacion->fetch_array())
	{
		echo "$campocondicion ya existe, no registrado<br><br>";
		
	}
	else
	{
		$conexion->query($sqlgraba); //grabadatos
		echo "<h3>$mensaje</h3>";
	}
	
	
	
	
	$sqlconsulta="SELECT * FROM $tabla";//muestra en pantalla la tabla
	$ejecutarconsulta=$conexion->query($sqlconsulta);
	foreach($ejecutarconsulta as $registrocon)
	{
		$dato1=$registrocon["$campo1"];
		$dato2=$registrocon["$campo2"];
		echo "$dato1 - $dato2<br>";
	}	
?>