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
$codmateriaen=base64_encode("codmateria");
$codmateriaen_siniguales= str_replace("=","",$codmateriaen);
echo $codmateriaen_siniguales;

$conexion=new mysqli("localhost","root","","agrupaciones");
$sqlmaterias="SELECT COUNT(cod_alu) as cuentaalumno, nom_est FROM estudios GROUP BY nom_est";
$ejmaterias=$conexion->query($sqlmaterias);
foreach ($ejmaterias as $registro)
{
    $materias=$registro["nom_est"];
    $materiasen=base64_encode($materias);
    $num=$registro["cuentaalumno"];
    
    echo "
    <tr>
        <td>$materias</td>
        <td><a href='./detalle_alum.php?$codmateriaen_siniguales=$materiasen'>$num</a></td>
    </tr>";
}
?>
</table>
</body>
</html>