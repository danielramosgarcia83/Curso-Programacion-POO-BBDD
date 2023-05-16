<?php
function actualiza($tabla,$valor)
    {
        $conexion=new mysqli("localhost","fila3","fila3","fila3");
        $sqlactualiza="UPDATE $tabla SET $valor";
        return $conexion->query($sqlactualiza);
    }

if($_POST["formulario"]=="empleados")
    {
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
    $codempleado=$_POST["codempleado"];
    $codmovil=$_POST["codmovil"];

    //Con esto invierto el estado (activo/libado) de los moviles
    $codmovilactual=$_POST["codmovilactual"];
    $numeroselect=$_POST["numero"];
    if (actualiza("empleados","cod_mov='$numeroselect',nom_emp='$nombre',ape_emp='$apellido',email_emp='$email' WHERE cod_emp='$codempleado'"))

        {
            actualiza("moviles","est_mov='0' WHERE cod_mov='$codmovilactual'");
            actualiza("moviles","est_mov='1' WHERE cod_mov='$numeroselect'");
        }
        else
        {
            echo "error al actualizar";
        }
    }
else
{
    $numero=$_POST["numero_movil"];
    $marca=$_POST["marca_movil"]; 
    $codmovil=$_POST["codmovil"];
    actualiza("moviles","num_mov='$numero',mar_mov='$marca' WHERE cod_mov='$codmovil'");
}
?>
<script>
    window.location.href="./alta<?php echo $_POST['formulario']?>.php";
</script>
<?php
?>