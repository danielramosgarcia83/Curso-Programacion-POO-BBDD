<?php

$ema=$_POST["email"];
$pas=$_POST["pass"];

$con=NEW mysqli("localhost","root","","ensal");

$sql="SELECT * FROM administradores WHERE email_adm='$ema'";
$ejsql=$con->query($sql);

if($regsql=$ejsql->fetch_array())
{
    //existe
    $pasdb=$regsql["pass_adm"];
    if(password_verify($pas,$pasdb))
    {
        //Pass OK!
        session_start();
        $_SESSION["administradores"]= $regsql["cod_adm"];
        header("location:./private/index.php");
    }
    else
    {
        echo "
        <script>
            alert('Email o contraseña incorrectos');
            window.location.href='index.html';
        </script>
        ";
    }
}
else
{
    echo "
    <script>
        alert('Email o contraseña incorrectos');
        window.location.href='index.html';
    </script>
    ";
}


?>