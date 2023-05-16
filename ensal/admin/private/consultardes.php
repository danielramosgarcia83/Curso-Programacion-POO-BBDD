<?php
session_start();
if(isset($_SESSION['administradores']))
{
    $hoy=date("d-m-Y");
    $nombrearchivo="Tabla_$hoy".".html";
    $con=NEW mysqli("localhost","root","","ensal");
    header("Content-Type: application/vns.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=$nombrearchivo");
?>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Consultar</title>
    
</head>
<body>
    <table border=1>
        <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Código Alumno</th>
                        <th>Nombre Alumno</th>
                        <th>Tipo Registro</th>
                    </tr>
        </thead>
        <tbody>
            <?php
                        $sqlreg="SELECT * FROM registros
                                    INNER JOIN alumnos USING(cod_alu)";
                        $ejreg=$con->query($sqlreg);
                        foreach($ejreg as $registroreg)
                        {
                            $fecha=$registroreg["fecha_reg"];
                            $hora=$registroreg["hora_reg"];
                            $tipo=$registroreg["tipo_reg"];
                            $codalu=$registroreg["cod_alu"];
                            $nomalu=$registroreg["nom_alu"];
                        ?>
                        <tr>
                        <td><?php echo "$fecha";?></td>
                        <td><?php echo "$hora";?></td>
                        <td><?php echo "$codalu";?></td>
                        <td><?php echo "$nomalu";?></td>
                        <td><?php echo "$tipo";?></td>
                        </tr>
                <?php
                }    
                ?>
        </tbody>
    </table>
</body>
</html>
<?php
}
else
{
    header("location:./../index.html");
}
?>