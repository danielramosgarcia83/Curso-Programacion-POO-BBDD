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
    <title>Alta empleados</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php
            include("./../manuelcp/navegacion.html")
        ?>
        <div class="offset-1 col-10 text-center">
<main>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre empleado..." required>
        <input type="text" name="apellido" placeholder="Apellido empleado..." required>
        <input type="text" name="email" placeholder="Email..." required>
        <select name="numero">
            <option value="">Selecciona Numero</option>
                <?php
                $conexion=new mysqli("localhost","fila3","fila3","fila3");
                $sqlconsulta="SELECT * FROM moviles WHERE est_mov='0'";
                $ejsql=$conexion->query($sqlconsulta);
                foreach ($ejsql as $registro) {
                    
                    $codmovil=$registro["cod_mov"];
                    $num=$registro["num_mov"];
                    $marca=$registro["mar_mov"];                    
                ?>
                    <option value="<?php echo $codmovil?>"><?php echo "$num - $marca";?></option>
                <?php                    
                }
                ?>
        </select>
        <br><input class="btn btn-success mt-3" type="submit" value="GRABAR">
    </form>
    <?php    
    if (isset($_POST["nombre"]))
    {
        $numero=$_POST["numero"];
        if(!$numero=="")
        {


    
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
    $conexion=new mysqli("localhost","fila3","fila3","fila3");
    $sql="INSERT INTO empleados (cod_mov,nom_emp,ape_emp,email_emp)
        VALUES ('$numero','$nombre','$apellido','$email')";

    //Esto actualiza el estado del movil asignado de 0 a 1
    $sqlestmovil="UPDATE moviles
                    SET est_mov = '1'
                    WHERE cod_mov='$numero'";

    if($conexion->query($sql) && $conexion->query($sqlestmovil))
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
            echo "<script>alert('Por favor elige un número');</script>";
        }

}
else
{

}
?>
<table class="table table-striped mt-5">
    <tr>
        <th>Nombre Empleado</th><th>Número Asignado</th><th>Marca Móvil</th>
    </tr>
<?php
$conexion=new mysqli("localhost","fila3","fila3","fila3");
$sqlconsultaCERO="SELECT *
FROM empleados
INNER JOIN moviles
USING(cod_mov)
WHERE est_mov='1'";
$ejsql=$conexion->query($sqlconsultaCERO);
foreach ($ejsql as $registro) {

    $cod=$registro["cod_emp"];
    $nom=$registro["nom_emp"];
    $num=$registro["num_mov"];
    $marca=$registro["mar_mov"];

?>
    <tr>
        <td><a href="modificar.php?form=empleados&cod=cod_emp=<?php echo $cod?>"><?php echo $nom?></a></td>
        <td><?php echo $num?></td>
        <td><?php echo $marca?></td>
    </tr>
<?php
        }
?>
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
