<table border=1>
<tr>
    <th>Código</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php
$conexion=NEW mysqli("10.10.10.199","escorpion","1234","encuestas");

$sql="SELECT * FROM alumnos";
$ejecutar=$conexion->query("$sql");
foreach ($ejecutar as $registro)
{
    $cod=$registro["cod_alu"];
    $ema=$registro["email_alu"];
    $pass=$registro["pass_alu"];

echo "<tr><td>$cod</td><td>$ema</td><td>$pass</td></tr>";





}




?>