<?php
    

$cod=$_POST["codigo"];
$nom=$_POST["nombre"];
$ema=$_POST["email"];

$conexion=NEW mysqli("10.10.10.199","fila3","1234","fila3");

$sql=

"UPDATE clientes
SET nom_cli ='$nom',email_cli ='$ema'
WHERE cod_cli='$cod'"

;

if($conexion->query($sql))
{
    echo "
        <script>
            alert('Registrado modificado');
            window.location.href='editar.php?codigocliente=$cod';
        </script>
    ";
}
else
{

}

?>