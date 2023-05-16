<?php
/*
RECIBE DNI Y BUSCAR DNI.
DNI SI EXISTE: SACO CODIGO Y FECHA SISTEMA.
COMPROB ULT REG HOY DE ESE DNI, SINO EXISTE:GRABA ENTRADA / SI EXISTE:SABER Q TIPO DE REG(ENTR O SALIDA) Y GRABAR CONTRARIO.
DNI NO EXISTE:MENSAJE
*/

$dni=$_POST["dni"];
$con=NEW mysqli("localhost","root","","ensal");

$sqldni="SELECT * FROM alumnos WHERE dni_alu='$dni'";
$ejecutardni=$con->query($sqldni);
if($registrodni=$ejecutardni->fetch_array())
{
    //Hemos encontrado DNI
    $codalu=$registrodni["cod_alu"];
    $fecha=date("Y-m-d");
    $hora=date("H:i:s");    

    $sqlconsulta="SELECT * FROM registros WHERE cod_alu='$codalu' AND fecha_reg='$fecha' ORDER BY cod_reg DESC";
    /*ORDER BY multiple seria asi:
    SELECT........ ORDER BY fecha ASC, hora_reg DESC, cod_alu ASC el ultimo no lleva coma(,)
    */
    $ejecutarconsulta=$con->query($sqlconsulta);
    if($registroconsulta=$ejecutarconsulta->fetch_array())
    {
        //dato existe
        $tiporeg=$registroconsulta["tipo_reg"];
        if($tiporeg=="Entrada")
        {
            $tipo="Salida";
        }
        else
        {
            $tipo="Entrada";
        }   
    }
    else
    {
        //se graba un dato
        $tipo="Entrada";
    }
    //se tiene que grabar en registro esto:
    $sqlgrabar="INSERT INTO registros (cod_alu,fecha_reg,hora_reg,tipo_reg)
    VALUES ('$codalu','$fecha','$hora','$tipo')";
    if($con->query($sqlgrabar))
    {
        echo"
        <script>
            alert('$tipo registrada');
            window.location.href='index.html';
        </script>
        ";
    }
    else
    {
        //mensaje error
    }
}
else
{
    echo "
    <script>
        alert('No existe DNI');
        window.location.href='index.html';
    </script>
    ";
    

}


?>