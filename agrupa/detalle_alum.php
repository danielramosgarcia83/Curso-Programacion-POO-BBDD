<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $codmateriaen=base64_encode("codmateria");
    $codmateriaen_siniguales= str_replace("=","",$codmateriaen);

    $materia=$_GET["$codmateriaen_siniguales"];
    
    
    $materia=base64_decode($materia);
    
    $conexion=new mysqli("localhost","root","","agrupaciones");
    $sql="SELECT * FROM alumnos
                    INNER JOIN estudios USING (cod_alu)
                    WHERE estudios.nom_est='$materia'";
    $ejsql=$conexion->query($sql);

    foreach ($ejsql as $registro)
    
    {
        echo $materia."-".$registro["nom_alu"]."<br>";
    }

    
    
    ?>
</body>
</html>