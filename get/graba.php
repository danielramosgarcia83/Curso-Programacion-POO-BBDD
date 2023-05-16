<?php
$valor=$_GET["relleneelformulario"];
$conexion=new mysqli ("","","","");

switch($valor)

{
	
	case 1: $dni=["dni"];
			$nombre=["nombre"];
			$sql="INSERT INTO clientes (dni_cli,nom_cli) VALUES ('$dni','$nombre')";
			$mensaje="Cliente Grabado";
			$mostrar="Ir a Consulta Cliente";
			$direccion="consultacliente.php";
			break;

	case 2: $precio=["precio"];
			$descripcion=["descripcion"];
			$sql="INSERT INTO productos (precio_pro,descripcion_pro) VALUES ('$precio','$descripcion')";
			$mensaje="Producto Grabado";
			$mostrar="Ir a Consulta Producto";
			$direccion="consultaproducto.php";
			break;

	case 3: $nombre=["categoria"];
			$sql="INSERT INTO categorias (categoria) VALUES ('$nombre')";
			$mensaje="Categoria registrada";
			$mostrar="Ir a Consulta Categoria";
			$direccion="consultacategoria.php";
			break;
	
}

if($conexion->query($sql))
{
	echo "$mensaje";
	echo "<button onclick='window.location.href=`$direccion`'>$mostrar</button>";

}
else
{
		echo "ERROR";
}
?>