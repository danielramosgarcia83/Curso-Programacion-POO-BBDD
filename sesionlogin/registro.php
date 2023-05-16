<?php

$pas=$_POST["password"];
$par=$_POST["passwordrepe"];
//comprobamos los password para ver si son iguales
if($pas==$par)
{
//Los password coinciden
//Ver sí email existe en BD
    $ema=$_POST["email"];
    $conexion=NEW mysqli("10.10.10.199","febrero","1234","alumnos");
    $buscaema="SELECT * FROM alumnado WHERE email_alu='$ema'";
    $ejema=$conexion->query($buscaema);

    //Queremos un valor, fetch_array()

    if ($ejema->fetch_array()) //si necesitaramos extraer valores, el ejema iria dentro de una variable
        {
            //email existe, mensaje
            echo "
            <script>
            
                alert('Este email ya existe');
                window.location.href='registro.html';
            </script>
            ";
        }
        else
        //email no existe
        //Recoger nombre,codificar password, grabar, conocer cod de lo que grabamos y crear carpeta imagenes
        {
            $nom=$_POST["nombre"];
            //codificamos contreseña
            $pas=password_hash($pas,PASSWORD_DEFAULT);
            $sqlgraba="INSERT INTO alumnado (nom_alu,email_alu,pass_alu) VALUES ('$nom','$ema','$pas')";
            //como es grabacion, ejecutamos preguntando, sin variable
            if ($conexion->query($sqlgraba))
            {
                //Se ha grabado
                $cod=$conexion->insert_id;
                //creamos la carpeta en la ruta que queremos
                mkdir("./privado/imagenes/$cod",0777);
                echo "
                <script>
                    alert('Te has registrado');
                    window.location.href='index.html';
                </script>
                ";
            }
            else
            {
                //No se ha grabado
                echo "
                <script>
                    alert('Ocurrió un error');
                    window.location.href='registro.html';
                </script>
                ";
            }
        }

}

else
{

//Los campos no coinciden... Muestro en pantalla y redirecciono

    echo"

        <script>
            alert('Los password no coinciden');
            windows.location.href='registro.html';
        </script>

    ";
}




?>