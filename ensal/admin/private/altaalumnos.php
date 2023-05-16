<?php
session_start();
if(isset($_SESSION['administradores']))
{
    

    $cod=$_SESSION['administradores'];
    $con=NEW mysqli("localhost","root","","ensal");
    $sql="SELECT * FROM administradores WHERE cod_adm='$cod'";
    $ejecutar=$con->query($sql);
    $registro=$ejecutar->fetch_array();
    $sesion=$registro["nom_adm"];
    $fecha=date("Y-m-d");

    if(isset($_POST["dnialu"]))
    
        {
            
            //GRABA BD
            //cod_adm 	dni_alu 	nom_alu 	fechaalta_alu
            $dnialu=$_POST["dnialu"];
            $sqldni="SELECT * FROM alumnos WHERE dni_alu='$dnialu'";
            $ejecutardni=$con->query($sqldni);
            if($registrodni=$ejecutardni->fetch_array())
                {
                    echo "
            <script>
                alert('ESTE DNI YA EXISTE');
                window.location.href='./altaalumnos.php';
            </script>
        
            ";
                }
                else
                {

            $nombrealu=$_POST["nombrealu"];
            $fecha=date("Y-m-d");
            $sql="INSERT INTO alumnos (cod_adm,dni_alu,nom_alu,fechaalta_alu) VALUES ('$cod','$dnialu','$nombrealu','$fecha')";
            $con->query($sql);

            echo "
            <script>
                alert('GRABADO $nombrealu - $dnialu');
                window.location.href='./altaalumnos.php';
            </script>
        
            ";
            }
        }
        else
        {       
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alta Alumnos</title>
    
    <link rel="stylesheet" href="./../../estilos.css">
</head>
<body>
    <div class="todo">
        <div class="arriba">
            <div class="botones">
            <button onclick="window.location.href='./index.php'">INICIO</button>
            <button onclick="window.location.href='./altaalumnos.php'">ALTA ALUMNO</button>
            <button onclick="window.location.href='./consultar.php'">CONSULTA</button>
            <button onclick="window.location.href='./altaadm.php'">ALTA ADMINISTRADORES</button>
            <button onclick="window.location.href='./salir.php'">SALIR</button>
            </div>
            <p><?php echo" ADMINISTRADOR: ".strtoupper($sesion)?></p>
            
            
        </div>
        <hr>
        <div class="abajo">
            <H1>Alta Alumnos</H1>

            <form action="" method="POST">
                <input type="text" name="nombrealu" placeholder="NOMBRE..." required>
                <input type="text" name="dnialu" placeholder="DNI..." required>
                <input type="submit" value="GRABAR">

            </form>
        </div>
    </div>
</body>
</html>
<?php
        }
}
else
{
    header("location:./../index.html");
}
?>