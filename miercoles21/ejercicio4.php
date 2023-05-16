<?php

if (isset($_POST["boton"]))
{
$mat=$_POST["materia"];

	$con=new mysqli("10.10.10.199","alfonso","123456","examen");
	$sqlc="SHOW COLUMNS FROM materias";
	$ejecutarc=$con->query($sqlc);
	
	$campos="";
	$arraycampos=array();
	
	foreach($ejecutarc as $c)
	{
		$campos.=$c["Field"].",";
		array_push($arraycampos,$c["Field"]);
	}

	$campos=substr($campos,0,-1);
	$sqlgraba="INSERT INTO materias ($campos) VALUES (NULL,'$mat')";
	$con->query($sqlgraba);

	$sqlconsulta="SELECT * FROM materias";
	$ejecutarconsulta=$con->query($sqlconsulta);

	foreach($ejecutarconsulta as $consulta)
	{
		foreach($arraycampos as $campo)
		{
			echo "$consulta[$campo]<br>";
		}
	}
}
else
{
?>

<form action="ejercicio4.php" method="POST">
<input type="text" name="materia" placeholder="Agregar materia...">
<input type="submit" name="boton" Value="Grabar">
</form>

<?php
}


?>