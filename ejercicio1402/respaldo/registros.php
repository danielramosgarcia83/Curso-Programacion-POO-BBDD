<html>
<head>
    <meta charset="UTF-8">
   
    <title>ENTRADAS / SALIDAS</title>
</head>
<body>
    <?php
    
    $conexion=NEW mysqli("localhost","root","","ejercicio1402");

    $sql="SELECT *FROM usuarios";
    $ejecutar=$conexion->query($sql);
    foreach($ejecutar as $registro)
    ?>
    <table border=1>
            <tr>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Cod Persona</td>
                <td>Nombre</td>
                <td>Tipo</td>
                </tr>
    <?php
    {
        $cod=$registro["cod_usu"];
        echo "$cod";

    ?>
        </table>
        <?php
    }
    ?>
</body>
</html>