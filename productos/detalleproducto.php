<?php

$codigo=$_GET["mochila"];

$conexion= new mysqli("10.10.10.108","escuela","1234","tienda");

$sql="SELECT * FROM productos WHERE codigo_pro='$codigo'";

$ejecutar=$conexion->query($sql);

$registro=$ejecutar->fetch_array();

$nombre=$registro["nombre_pro"];
$precio=$registro["precio_pro"];
$descripcion=$registro["descripcion_pro"];
$codigocat=$registro["codigo_cat"];


$sqlcat="SELECT * FROM categorias WHERE codigo_cat='$codigocat'";

$ejecutarcat=$conexion->query($sqlcat);

$registrocat=$ejecutarcat->fetch_array();

$nombrecat==$registrocat["nombre_cat"];

echo "Nombre producto: $nombre <br>";
echo "Descripcion producto: $descripcion <br>";
echo "Precio producto: $precio <br>";
echo "Categoria producto: $nombre_cat <br>";

?>