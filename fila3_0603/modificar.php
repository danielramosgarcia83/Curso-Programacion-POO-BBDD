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
<?php
        $formulario=$_GET["form"]; //Esta variable trae el nombre el formulario EMPLEADOS o MOVILES
        $cod=$_GET["cod"];
        $conexion=new mysqli("localhost","fila3","fila3","fila3");
        $sqlconsulta="SELECT * FROM $formulario WHERE $cod";
        $ej=$conexion->query($sqlconsulta);
        $reg=$ej->fetch_array();
        $codmovil=$reg['cod_mov'];
        $sqlconsultamovil="SELECT * FROM moviles WHERE cod_mov=$codmovil";
        $ejmovil=$conexion->query($sqlconsultamovil);
        $regmovil=$ejmovil->fetch_array();
        
        //Este condicional me mostrará el formulario correspondiente (EMPLEADOS O MOVILES) para su modificacion
        if ($formulario=="empleados")
        {          
?>
<form action="grabamodificacion.php" method="post">
        <input type="text" name="nombre" value="<?= $reg['nom_emp']?>" placeholder="Nombre empleado..." required>
        <input type="text" name="apellido" value="<?= $reg['ape_emp']?>" placeholder="Apellido empleado..." required>
        <input type="text" name="email" value="<?= $reg['email_emp']?>"  placeholder="Email..." required>
        
        <input type="hidden" name="formulario" value="empleados"> <!--INPUT PARA SABER DE QUE FORM VIAJAN LOS DATOS Y EN QUE TABLA DEBO GRABAR -->
        
        <input type="hidden" name="codempleado" value="<?= $reg['cod_emp']?>">
        <input type="hidden" name="codmovilactual" value="<?php echo $codmovil?>">
        
        <select name="numero">
            <option value="<?php echo $codmovil?>"><?= $regmovil['num_mov']," - ", $regmovil['mar_mov']?></option>

            <?php
                $sqlconsulta="SELECT * FROM moviles WHERE est_mov='0'";
                $ejsql=$conexion->query($sqlconsulta);
                foreach ($ejsql as $registro)
                {
                    
                    $codmovil=$registro["cod_mov"];
                    $num=$registro["num_mov"];
                    $marca=$registro["mar_mov"];
                    
                ?>
                    <option value="<?php echo $codmovil?>"><?php echo "$num - $marca";?></option>
                <?php
                    
                }
                ?>
        </select>
        <input type="hidden" name="codmovil" value="<?php echo $codmovil?>">
        <input class="btn btn-success mt-3" type="submit" value="GRABAR">
</form>
<?php
        }
        else
        {
        ?>
<form action="grabamodificacion.php" method="post">
        <input type="text" name="numero_movil" value="<?= $reg['num_mov']?>">
        <input type="text" name="marca_movil" value="<?= $reg['mar_mov']?>">
        <input type="hidden" name="formulario" value="moviles"> <!--INPUT PARA SABER DE QUE FORM VIAJAN LOS DATOS Y EN QUE TABLA DEBO GRABAR -->

        <input type="hidden" name="codmovil" value="<?php echo $codmovil?>">
        <br><input class="btn btn-success mt-3" type="submit" value="GRABAR">
</form>


</div>
    </div>
</div>
</body>
</html>

<?php
        }
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