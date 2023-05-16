<?php


$pass="Daniel";

$passen=password_hash($pass,PASSWORD_DEFAULT);
echo"$passen";


if(password_verify($pass,$passen))
{
    echo "contraseña Correcta";
}
else
{
    echo "contraseña Incorrecta";
}

?>
