<html>
  <head>
    <meta charset="utf-8"/>
</head>
<form action="grabaproducto.php" method="POST">

<input type="text" name="nombrepro" placeholder="Nombre Producto" required>
<textarea name="Descripción" placeholder="Descripción del Producto"></textarea>

<select name="categoria">

	<?php
		
	$servidor="10.10.10.108";
	$usuario="escuela";
	$password="1234";
	$basedatos="tienda";


	// $servidor="localhost";
	// $usuario="root";
	// $password="";
	// $basedatos="tienda";
	
	$conexion=new mysqli($servidor,$usuario,$password,$basedatos);
	$sql="SELECT * FROM categorias ORDER BY nombre_cat ASC";
	
	$ejecutar=$conexion->query($sql);
	
	foreach($ejecutar as $registro)
	
	{
		$codcat=$registro["codigo_cat"];
		$nomcat=$registro["nombre_cat"];
		echo "<option value='$codcat'>$nomcat</option>";
	
	}
	?>
	
</select>

<input type="text" name="precio" placeholder="Precio Producto" required>
<input type="submit" placeholder="Grabar">

</form>
</html>