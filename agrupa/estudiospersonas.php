<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <td>materia</td>
        <td># Alumnos</td>
    </tr>
<?php
$conexion=new mysqli("localhost","root","","agrupaciones");
//$sqlmaterias="SELECT DISTINCT nom_est FROM estudios"; mi version
$sqlmaterias="SELECT nom_est FROM estudios GROUP BY nom_est"; //version alfonso
$ejmaterias=$conexion->query($sqlmaterias);
foreach ($ejmaterias as $registro)
{
    $materias=$registro["nom_est"];
    $sqlalumnos="SELECT cod_alu FROM estudios WHERE nom_est='$materias'";
    $ejsqlalumnos=$conexion->query($sqlalumnos);
    $num=$ejsqlalumnos->num_rows;
    echo "
    <tr>
        <td>$materias</td>
        <td>$num</td>
    </tr>";
}
?>
</table>
</body>
</html>