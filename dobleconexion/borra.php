<?php

    //recibimos datos por GET

    $cod=$_GET["codigocliente"];
    
    $conexion=NEW mysqli("10.10.10.199","fila3","1234","fila3");

    $sql="DELETE FROM clientes where cod_cli='$cod'";

    if($conexion->query($sql))
    {
        //Se borró.
        header("location:ver.php");
    }
    else
    {
        //Ocurrió un error.
        echo "OCURRIÓ UN ERROR
        <a href='ver.php'>VOLVER</a>
    }";
    }




?>