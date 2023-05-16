<?php

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$pass= base64_encode($_POST["pass"]);


include("./../milanuncios/php/conexion.php");


$sql="INSERT INTO clientes(nom_cli,email_cli,pass_cli) VALUES ('$nombre','$email','$pass')";

if($conexion->query($sql))

{
    //Registrado perfectamente;
    //Todo email necesita: PARA/ASUNTO/MENSAJE
    $header="From: miweb@miweb.es";
    $para=$email;
    $asunto="Bienvenido a mi web";
    $mensaje="Hola $nombre, te damos la bienvenida......";
    //Para enviar un email:
    mail($para,$asunto,$mensaje,$header);


}

else

{
    echo "No registrado";
    
}
?>