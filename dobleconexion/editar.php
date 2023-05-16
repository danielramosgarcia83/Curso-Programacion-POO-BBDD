<?php

    //recibimos datos por GET

    $cod=$_GET["codigocliente"];
    
    $conexion=NEW mysqli("10.10.10.199","fila3","1234","fila3");

    $sql="SELECT * FROM clientes where cod_cli='$cod'";
    $ejecutar=$conexion->query($sql);

    $registro=$ejecutar->fetch_array();

    
        $nom=$registro["nom_cli"];
        $ema=$registro["email_cli"];
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="modifica.php" method="POST"> 
        <input type="text" name="nombre" value="<?php echo $nom?>" placeholder="Nombre...">
        <input type="text" name="email" value="<?php echo $ema?>" placeholder="Email...">
        <input type="hidden" name="codigo" value="<?php echo $cod?>">
        <input type="submit" value="MODIFICAR">
    </form>
</body>
</html>
