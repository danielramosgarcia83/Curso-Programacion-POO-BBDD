<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border-collapse:collapse; padding: 50px" border="1">
        <tr>
            <td>Contacto</td>
            <td>Historia</td>
            <td>Nosotros</td>
        </tr>
        <?php
$conexion = new mysqli("localhost","root","","clics");
$sql="SELECT * FROM acciones WHERE nom_acc='Contacto'";
$ej=$conexion->query($sql);


?>
        

    </table>
</body>
</html>
