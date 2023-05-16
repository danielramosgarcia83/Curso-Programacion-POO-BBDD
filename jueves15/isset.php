<?php

//Veremos sí los datos provienen por POST

if (isset($_POST["email"])) //aqui podriamos tambien poner un NAME al input submit y asi lo colocamos aqui en lugar de "email", es una consulta BOOLEANO el "isset"
{
	//sí la informacion viene por POST, ejecuta todo el codigo
	
}
else
{
	//sino viene por el POST del formulario los datos, es decir,
	//que han ejecutado el PHP directamente sin pasar por el formulario de LOGIN
	echo "VE AL FORMULARIO LOGIN";
}










?>