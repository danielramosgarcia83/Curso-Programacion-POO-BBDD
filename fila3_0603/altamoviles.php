<?php
session_start();
if (isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <title>Alta Móviles</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php
            include("./../manuelcp/navegacion.html")
        ?>
        <div class="offset-2 col-8 text-center">
<main>
    <form action="" method="post">
        <input type="text" name="numero" placeholder="Numero movil..." required>
        <input type="text" name="marca" placeholder="Marca movil..." required>
        <br><input class="btn btn-success mt-3" type="submit" value="GRABAR">
    </form>
    <?php
    if (isset($_POST["numero"]))
    {
    $numero=$_POST["numero"];
    $marca=$_POST["marca"];
    
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="INSERT INTO moviles (num_mov,mar_mov,est_mov)
        VALUES ('$numero','$marca','0')";
    
    if($conexion->query($sql))
    {    
        echo "
        <script>
        alert('Movil grabado');
        </script>
        ";
    }
    else
    {
        echo "ocurrió un error";
    }

    }
    else
    {

    }
?>
<table class="table table-striped mt-5">
    <tr>
        <th colspan="3">Numeros Ocupados</th>
    </tr>    
    <tr>
        <th>Numeros</th><th>Marca</th>
    </tr>
<?php
$conexion=new mysqli("localhost","fila3","fila3","fila3");
$sqlconsultaCERO="SELECT * FROM moviles WHERE est_mov='1'";
$ejsql=$conexion->query($sqlconsultaCERO);
foreach ($ejsql as $registro) {

    $num=$registro["num_mov"];
    $marca=$registro["mar_mov"];

?>
    <tr>
        <td><?php echo $num?></td>
        <td><?php echo $marca?></td>
    </tr>
<?php
        }
?>
    <tr>
        <th colspan="3">Numeros Sin Asignar</th>
    </tr>
    <tr>    
    <th>Numeros</th><th>Marca</th>
    </tr>
<?php
    $sqlconsultaUNO="SELECT * FROM moviles WHERE est_mov='0'";
    $ejsql=$conexion->query($sqlconsultaUNO);
    foreach ($ejsql as $registro) {

        $cod=$registro["cod_mov"];
        $num=$registro["num_mov"];
        $marca=$registro["mar_mov"];

?>
    <tr>
        <td><?php echo $num?></td>
        <td><a href="modificar.php?form=moviles&cod=<?php echo $cod?>"><?php echo $marca?></a></td>
    </tr>
<?php
        }
?>
</table>
</main>


        </div>
    </div>
</div>
</body>
</html>

<?php
}
else
{
    ?>
    <script>
        alert("No has iniciado session");
        window.location.href="./../peche/login.php";
    </script>
    
    <?php
}
?>
