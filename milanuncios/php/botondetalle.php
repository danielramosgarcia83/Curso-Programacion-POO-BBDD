<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("./conexion.php");
$codigo=$_GET["cod"];

$sqlanu="SELECT * FROM anuncios WHERE cod_anu='$codigo'";
$ejecutaranu=$conexion->query($sqlanu);
$imagen=$ejecutaranu->fetch_array();

$titulo=$imagen["nom_anu"];
$precio=$imagen["precio_anu"];
$descripcion=$imagen["des_anu"];
?>

<h3><?php echo $titulo ?></h3>
<p><?php echo $descripcion?></p>
<label><?php echo $precio?></label>

<?php

$sqlima="SELECT * FROM imagenes WHERE cod_anu='$codigo'";
$ejecutarima=$conexion->query($sqlima);

foreach($ejecutarima as $registroima)

{
$imagen=$registroima["nom_ima"];
$ruta="./../imagenes/$codigo/$imagen";
?>


<img src="<?php echo $ruta?>">


<?php
}
?>  

</body>
</html>