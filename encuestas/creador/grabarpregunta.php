<?php

$pregunta=$_POST["pregunta"];

$con=NEW mysqli("localhost","root","","encuestas");
//$con=NEW mysqli("10.10.10.199","escorpion","1234","encuestas");

$sql="INSERT INTO preguntas (pregunta_pre) VALUES ('$pregunta')";
if ($con->query($sql))
{
    echo "Grabado";
}
else
{
    echo "No Grabado";
}
?>