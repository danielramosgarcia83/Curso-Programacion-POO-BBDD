<?php


include ("sacardefunciones.php");

$variable = fronteo(1,3);

echo "$variable";


//ejemplo del query con IF desde una funcion
if(grabar("tabla","nombre_alu,apellido_alu","'$nom','$ape'")); //($tabla,$campos,$valores)



?>