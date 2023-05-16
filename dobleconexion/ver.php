<html>
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
    <title>Ver Registros</title>
</head>
<body>
    
    <h4>Clientes de la empresa</h4>
    <hr>
    <table border=1>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <th></th>
        </thead>
        <tbody>
        
            
            <?php
    $conexion=NEW mysqli("10.10.10.199","fila3","1234","fila3");
    $sql="SELECT * FROM clientes";
    $ejecutar=$conexion->query($sql);

    foreach ($ejecutar as $registro)
        {
            $cod=$registro["cod_cli"];
            $nom=$registro["nom_cli"];
            $ema=$registro["email_cli"];
        
        echo"
        
        <tr>
            <td>$nom</td>
            <td>$ema</td>
            <td>
            <a href='editar.php?codigocliente=$cod'><i class='fa fa-edit'></i></a>
            <a href='borra.php?codigocliente=$cod'><i class='fa fa-trash'></i></a>
            </td>
        </tr>
        
        ";
        }
    ?>

            

        </tbody>
    </table>

    




    
</body>
</html>