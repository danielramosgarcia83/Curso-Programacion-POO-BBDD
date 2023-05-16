<html>
<head>
    <meta charset="UTF-8">
    <title>ENTRADAS / SALIDAS</title>
</head>
<body>
    <H4>CONTROL ENTRADAS / SALIDAS</H4>
    <table border=1>
            <tr>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Cod Persona</td>
                <td>Nombre</td>
                <td>Tipo</td>
            </tr>        
    <?php
    $conexion=NEW mysqli("localhost","root","","ejercicio1402");
    $sql="SELECT * FROM usuarios
    INNER JOIN registros USING (cod_usu) ORDER BY cod_usu ASC, hora_reg ASC";
    
    $ejecutar=$conexion->query($sql);
    foreach($ejecutar as $registro)        
        {
            $cod=$registro["cod_usu"];
            $nom=$registro["nom_usu"];
            $fecha=$registro["fecha_reg"];
            $hora=$registro["hora_reg"];
            $tipo=$registro["tipo_reg"];

            echo
            "<tr>
            <td>$fecha</td>
            <td>$hora</td>
            <td>$cod</td>
            <td>$nom</td>";

            if($registro["tipo_reg"]=="entrada⬆")
            {   
                echo "<td style='color:blue'>$tipo</td>";
            }
            else
            {
                echo "<td style='color:red'>$tipo</td>";
            }   
        }
    ?>
    </table>
    <br>
    <a href="index.html">VOLVER</a>
</body>
</html>