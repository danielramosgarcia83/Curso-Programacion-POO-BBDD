<?php
session_start();
//conexion BD

//$conexion=  NEW mysqli("10.10.10.199","fila3","1234","fila3");
$conexion=  NEW mysqli("localhost","root","","tienda");
if(isset($_SESSION["carrito"]))
{
    //Ya tenemos la sesion. QUE DATO TIENE LA SESION:
    $cod=$_SESSION["carrito"];
    $sql="UPDATE pruebas
    SET cant_pru=cant_pru+1
    WHERE cod_pru=$cod";
    if($conexion->query($sql))
    {
        //Registro actualizado
        echo "<script>
            alert('Añadir a la cesta');
            window.location.href='productos.php';
        </script>";
    }
    else
    {}
}
else
{

    $ahora=date("h:i:s");
    //vamos a grabar en la tabla pruebas

    $sql="INSERT INTO pruebas (cant_pru,hora_pru) VALUES ('1','$ahora')";

    if($conexion->query($sql))
    {
        //Se grabó correctamente
        $cod= $conexion->insert_id;
        
        $_SESSION["carrito"]=$cod;
        echo"<script>
        alert('Producto añadido');
        window.location.href='productos.php';
        </script>";
    }
    else
    {
        //No se grabó correctamente
        echo"<script>
        alert('Ocurrió un error');
        window.location.href='productos.php';
        </script>";
    }
}
?>