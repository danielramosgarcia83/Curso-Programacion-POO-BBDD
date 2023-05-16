<?php

if(isset($_POST["email"]))
{
    include("./funciones.php");
    //recibimos datos
    $ema=$_POST["email"];
    $pas=$_POST["contrasena"];
    
    $guardar=existe("administradores","WHERE email_adm='$ema' AND pass_adm='$pas'");

    if($guardar)
    {
        //Se encontraron datos
        //Crear sesion
        session_start();
        $_SESSION["admin"]=$guardar["cod_adm"];
        echo "bien";
    }
    else
    {
        //No hay datos 
        echo "Mal";
    }

    
}
else
{

}

?>