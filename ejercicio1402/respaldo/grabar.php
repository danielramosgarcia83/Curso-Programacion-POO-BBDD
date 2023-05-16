<?php

$ema=$_POST["email"];
$pass=$_POST["password"];

$conexion=NEW mysqli("localhost","root","","ejercicio1402");

$sqlconsulta="SELECT * FROM usuarios WHERE email_usu='$ema'";
$ejecutar=$conexion->query($sqlconsulta);
if($registro=$ejecutar->fetch_array())
{
    session_start();
    $cod=$registro["cod_usu"];
    $_SESSION["usuarios"]=$cod;
    $sqlentrada="INSERT INTO entradas (cod_usu,tipo_ent) VALUES ('$cod','entrada⬆')";
    $conexion->query("$sqlentrada");
    echo "
    <script>
    window.location.href='perfil.html'
    </script>
    ";

    echo "$cod - entrada grabada";
}
else
{
    
    header("location:./altas.php");
}
?>