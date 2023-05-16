<?php

//Todo el fomulario en php
//abrir el formulario


echo "<form action='' method=''>";

//dentro del formulario hago el BUCLE
//inicializamos un contador antes del bucle

$cont=1;

while($cont<11)
{
	echo "<input type='text' name='caja $cont' placeholder='caja$cont'>";
	echo "<br>";
	$cont=$cont+1;
};

echo "<input type=submit value='enviar'>";
echo "</form>";




?>