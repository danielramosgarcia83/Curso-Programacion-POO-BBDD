<?php
$cod=$_GET["codigo"];


$con=new mysqli("10.10.10.106","clase","1234","jueves22");
$sql="SELECT * FROM alumnos WHERE cod_alu='$cod'";
$ejecutar=$con->query($sql);
$registro= $ejecutar->fetch_array();

$nom=$registro["nom_alu"];
$email=$registro["email_alu"];
$pass=$registro["pass_alu"];

echo"
	<form action='modifica.php' method='POST'>
	<input type='text' name='nombre' placeholder='Nombre alumno' value='$nom'>
	<input type='text' name='email' placeholer='Email alumno' value='$email'>
	<input type='text' name='password' placeholder='contraseña' value='$pass'>
	<input type='hidden' name='codigo' value='$cod'>
	<input type='submit' value='Modificar'>
	</form>

";
// readonly nos mostraria sin dejar modificar en un input <input...... readonly>

if (isset($_GET["index"]))
{
	echo "<button onclick='window.location.href=`index.php`'>Volver</button>";
}
?>