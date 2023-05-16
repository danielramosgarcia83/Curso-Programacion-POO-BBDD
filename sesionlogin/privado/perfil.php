<?php

session_start();

if(isset($_SESSION["usuario"]))

{
    //session existe
    $cod=$_SESSION["usuario"];
    $conexion=NEW mysqli("10.10.10.199","febrero","1234","alumnos");
    $sql="SELECT * FROM alumnado WHERE cod_alu='$cod'";
    $ejecutar=$conexion->query($sql);
    $registro=$ejecutar->fetch_array();
    $nom=$registro["nom_alu"];
    $ema=$registro["email_alu"];
    echo "Perfil de $nom <br>";
    $img=$registro["avatar_alu"];
    if($img=="")
    {
        echo "
            <img width='5%' src='./imagenes/avatar.avif'><br>
        ";
    }
    else
    {
        $ruta="./imagenes/$cod/$img";
        echo "<img src='$ruta' width='5%'>";
    }
    ?>

    <form action="modifica.php" enctype="multipart/form-data" method="POST">
        <input type="text" name="nombre" value="<?php echo "$nom"?>" placeholder="Nombre">
        <br>
        <input type="text" name="email" value="<?php echo "$ema"?>" placeholder="Email" readonly>
        <br>
        <input type="file" name="imagen">
        <br>
        <input type="submit" value="MODIFICAR">
        
    </form>


    <?php
}
else
{
    //no ha pasado por login, asi que...
    header("location:./../index.html");
}

?>