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

    if(isset($_POST["nombre"]))
    {
        $nom=$_POST["nombre"];
        $ema=$_POST["email"];
        $pas=$_POST["pass"];
        $rol=$_POST["rol"];
        $con=NEW mysqli("localhost","root","","ensal");
        $sqlconsulta="SELECT * FROM administradores WHERE email_adm='$ema'";
        $ejecutar=$con->query($sqlconsulta);
        
        if($ejecutar->fetch_array())
        {
            //Ya existe este administrador
            echo "
            <script>
                alert('Administrador ya existe!');
                window.location.href='./index.php';
            </script>
            ";
        }
        else
        {
            $passencriptada=password_hash($pas,PASSWORD_DEFAULT);
            $sql="INSERT INTO administradores (nom_adm, email_adm, pass_adm, rol_adm) VALUES ('$nom','$ema','$passencriptada','$rol')";
            if($con->query($sql))
            {
                //grabó                
                echo "
                <script>
                    alert('Administrador Registrado');
                    window.location.href='index.php';
                </script>
                ";
            }
            else
            {
                //No grabó
                echo "
                <script>
                    alert('Ocurrió un error');
                    window.location.href='index.php';
                </script>
                ";
            }
        }
            /**
             * index (login) ira a principal:una pantalla q permite dar de alta alumno, consulta, alta admin (no es dios)
             * cada documento tendra un menu en la cabecera: inicio, alta alumno,consulta,Alta administrador, salir, "Mi nombre" 
             */
    }

        else
        {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="./../../estilos.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
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
            <H1>ADMINISTRADORES</H1>
            <form action="" method="POST">
                <input type="text" name="nombre" placeholder="Nombre..." maxlength="50" required>
                <br>
                <input type="email" name="email" placeholder="Email..." maxlength="100" required>
                <br>
                <input type="password" name="pass" placeholder="Password..." maxlength="100" required>
                <br>
                <select name="rol" required>
                    <option value="">Selecciona rol</option>
                    <option value="1">Todo</option>
                    <option value="2">Altas</option>
                    <option value="3">Consulta</option>
                </select>
                <input type="submit" value="Grabar">

            </form>
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