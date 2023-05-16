<?php

//recogemos los datos index

$ema=$_POST["email"];
$pas=$_POST["pass"];

//vamos a buscar email en BD, nos conectamos

$conexion=NEW mysqli("10.10.10.199","febrero","1234","alumnos");

//SQL buscar email

$buscaema="SELECT * FROM alumnado WHERE email_alu='$ema'";

$ejema=$conexion->query($buscaema);

if ($registro=$ejema->fetch_array())

    {
        //extraemos password de la BD y verificamos si esta OK!
        $pasbd=$registro["pass_alu"];
        if (password_verify($pas,$pasbd))
        {
            //Password correcto, extraemos el cod
            //porq vamos a iniciar una sesion y le metemos este codigo
            $cod=$registro["cod_alu"];
            session_start();
            $_SESSION["usuario"]=$cod;
            //redireccionar a donde queremos (privado->index.php)
            header("location:./privado/index.php"); //header es un enlace directo, sin mensajes.

        }
        else

        {
            //Password es incorrecto

            echo "
                <script>
                    alert('Email o Password incorrecto');
                    window.location.href='index.html';
                </script>
            
            ";
        }
    }
    else

    {
        //El email no se encontró en la tabla
        echo "
        <script>
            alert('Email o Password incorrecto');
            windows.location.href='index.html';
        </script>
        ";
    }
?>