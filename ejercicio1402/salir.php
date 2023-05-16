<?php
$conexion=NEW mysqli("localhost","root","","ejercicio1402");
session_start();

if(isset($_SESSION["usuarios"]))
{
    $cod=$_SESSION["usuarios"];
    $fecha=date("Y-m-d");
    $hora=date("h:i:s");
    $sqlsalida="INSERT INTO registros (fecha_reg,hora_reg,cod_usu,tipo_reg) VALUES ('$fecha','$hora','$cod','Salida⬇')";
    $conexion->query("$sqlsalida");
    session_destroy();
    echo"
    <script>
    alert('Registrada SALIDA');
    window.location.href='index.html';
    </script>
";
}
else
{
    echo"
    <script>
    alert('No has iniciado session');
    window.location.href='index.html';
    </script>
";
}

?>