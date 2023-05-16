<?php

function insertar($tabla,$campos,$valores)
{
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="INSERT INTO $tabla ($campos) VALUES ($valores)";
    return $conexion->query($sql);
    $conexion->close();
}

function ultimo()
{
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    return $conexion->insert_id;
    $conexion->close();
}

function consultafetch($tabla, $condicion)
{
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="SELECT * FROM $tabla $condicion";
    $ejecutar=$conexion->query($sql);
    return $ejecutar->fetch_array();
    $conexion->close();
}

function consultaquery($tabla, $condicion)
{
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="SELECT * FROM $tabla $condicion";
    return $conexion->query($sql);
    $conexion->close();
}

function modificar($tabla, $campos, $condicion)
{
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="UPDATE $tabla SET $campos $condicion";
    return $conexion->query($sql);
    $conexion->close();
}

function borrar($tabla, $condicion)
{
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="DELETE FROM $tabla $condicion";
    return $conexion->query($sql);
    $conexion->close();
}

function ALERTA($mensaje, $link)
{
    echo "
    <script>
            alert('$mensaje');
            window.location.href='$link';    
    </script>
    ";
}
?>
