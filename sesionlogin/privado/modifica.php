<?php

session_start();

if(isset($_SESSION["usuario"]))

{
    //session existe
    $cod=$_SESSION["usuario"];
    
    $nom=$_POST["nombre"];
    $ema=$_POST["email"];
    $img=$_FILES["imagen"]["name"];
    $conexion=NEW mysqli("10.10.10.199","febrero","1234","alumnos");
    
    $sql="UPDATE alumnado SET nom_alu='$nom', avatar_alu='$img' WHERE cod_alu='$cod'";
    if($conexion->query($sql))
    {
        $ruta="./imagenes/$cod/$img";
        @move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
        echo"
        <script>
            alert('Perfil Modificado');
            window.location.href='index.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
            alert('Ocurrió un error');
            window.location.href='perfil.php';
        </script>
        ";
    }

}
else
{
    //no ha pasado por login, asi que...
    header("location:./../index.html");
}

?>