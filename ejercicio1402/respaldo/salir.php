<?php
$conexion=NEW mysqli("localhost","root","","ejercicio1402");
session_start();

if(isset($_SESSION["usuarios"]))
{
    $cod=$_SESSION["usuarios"];
    $sqlsalida="INSERT INTO salidas (cod_usu,tipo_sal) VALUES ('$cod','Salida⬇')";
    $conexion->query("$sqlsalida");
    echo"
    <script>
    alert('Registrada SALIDA');
    </script>
";
}
else
{
    echo"
    <script>
    alert('No has iniciado session');
    </script>
";
}

?>