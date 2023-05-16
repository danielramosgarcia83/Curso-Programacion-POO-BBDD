<?php

if(isset($_POST["boton"]))
{
	$nom=$_POST["nombre"];
	$ape=$_POST["apellido"];
	echo "$nom - $ape";
}
else
{
		echo "Rellena el formulario";
		?>
		<form action="formasimismo.php" method="POST">
			<input type="text" name="nombre" placeholder="Nombre...">
			<input type="text" name="apellido" placeholder="Apellidos...">
			<input type="submit" Value="Enviar" name="boton">
		</form>
		<?php
		
}



?>
