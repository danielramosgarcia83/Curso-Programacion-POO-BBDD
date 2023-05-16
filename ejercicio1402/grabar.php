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
    $fecha=date("Y-m-d");
    $hora=date('h:i:s');
    $sqlentrada="INSERT INTO registros (fecha_reg,hora_reg,cod_usu,tipo_reg) VALUES ('$fecha','$hora','$cod','entrada⬆')";
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
    echo "
    <script>
    alert('Email No registrado');
    window.location.href='./altas.php'
    </script>
    ";
}
?>