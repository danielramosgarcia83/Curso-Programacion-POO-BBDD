<?php
/*
 * recoger datos form
 * hash password
 * sql grabar
 * ejecuto preguntando
 * si bien, mensaje a index
 * si mal, mensaje a index
 */

$nom=$_POST["nombre"];
$ema=$_POST["email"];
$pas=$_POST["pass"];
$rol=$_POST["rol"];

$passencriptada=password_hash($pas,PASSWORD_DEFAULT);
$con=NEW mysqli("localhost","root","","ensal");
$sql="INSERT INTO administradores (nom_adm, email_adm, pass_adm, rol_adm)
    VALUES ('$nom','$ema','$passencriptada','$rol')";
if($con->query($sql))
{
    //grabó
    echo "
    <script>
        alert('Administrador Registrado');
        windows.location.href='index.html';
    </script>
    ";
}
else
{
    //No grabó
    echo "
    <script>
        alert('Ocurrió un error');
        windows.location.href='index.html';
    </script>
    ";
}

/**
 * index (login) ira a principal:una pantalla q permite dar de alta alumno, consulta, alta admin (no es dios)
 * cada documento tendra un menu en la cabecera: inicio, alta alumno,consulta,Alta administrador, salir, "Mi nombre" 
 */
?>