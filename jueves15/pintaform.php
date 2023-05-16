<?php

function inicioform($accion,$metodo)
{
	echo"<form action='$accion' method='$metodo'>";
}


function finform()
{
	echo"</form>";
}

function pintainput($tipo,$nombre,$place)
{
	echo"<input type='$tipo' name='$nombre' placeholder='$place'>";
}


inicioform("graba.php","POST");
pintainput("text","nombrecliente","Nombre del Cliente");
pintainput("text","apellidoscliente","Apellidos del Cliente");
finform();






?>