
<button onclick="window.location.href='index.html'">INICIO</button>
<button onclick="window.location.href='formularioaltaprovincia.html'">Alta Provincia</button>
<button onclick="window.location.href='formularioaltasexo.html'">Alta Sexo</button>
<button onclick="window.location.href='formularioaltacliente.php'">Alta Clientes</button>
<hr>
<h1>Alta Cliente</h1>



<form action="grabacliente.php" method="POST">

	<input type="text" name="ncliente" placeholder="Nombre Cliente" maxlength=20 required>
	<input type="email" name="nemail" placeholder="Email Cliente" maxlength=20 required>
	<input type="number" name="ntelefono" placeholder="Telefono Cliente" maxlength=20 required>
	<input type="password" name="npass" placeholder="Password Cliente"maxlength=255 required>
	
	<select name="nprovincia">
	<?php
		//conectarme a BD
		$conexion=new mysqli("localhost","root","","lunes5");
		//SQL consulta
		$sqlbuscaprovincias="SELECT * FROM provincias ORDER BY nombre_pro ASC";
		//Guardar la ejecuion en variable
		$ejecutar=$conexion->query($sqlbuscaprovincias);
		
		//Bucle para pintar provincias
		
		foreach($ejecutar as $registro)
		{
			$codpro=$registro["codigo_pro"];
			$nompro=$registro["nombre_pro"];
			//mostramos en pantalla la opcion
			echo "<option value='$codpro'>$nompro</option>";
		}
			
		
	?>
	
	</select>	
	<br><br>
	<h3>Elige sexo</h3>

<?php

//veremos otra forma de mostrar distinta a SELECT, en este caso "input type="RADIO"
//SQL consulta

$sqlbuscasexo="SELECT * FROM sexos";
$ejecutar=$conexion->query($sqlbuscasexo);

foreach($ejecutar as $registrosex)
{
	
	$codsex=$registrosex["codigo_sex"];
	$nomsex=$registrosex["nombre_sex"];
	
	echo "$nomsex <input type='radio' name='sexo' value=$codsex>";
}

?>

<input type="submit" values="Grabar">



</form>