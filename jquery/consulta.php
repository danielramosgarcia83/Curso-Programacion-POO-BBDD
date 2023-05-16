<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Consulta de personas</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Estado</th>
        </tr>
        <?php
            $conexion= new mysqli("10.10.10.199","bareto","1234","bar");
            $sql="SELECT * FROM personas";
            $ejecutar=$conexion->query($sql);

            foreach($ejecutar as $registro)
            {
                $cod=$registro["cod_per"];
                $nom=$registro["nom_per"];
                $edad=$registro["edad_per"];
                $estado=$registro["estado_per"];


                
                
                if($estado=="Abierto")
                {
                    echo "
                    <tr id='$cod' style=background-color:green>
                    <td>
                        <a href='#' onclick='enviacodigo($cod)'>$nom</a>
                    </td>
                    
                    <td>$edad</td>
                    
                    <td>$estado</td>
                    </tr>

                ";
                }
                else
                {
                    echo "
                    <tr id='$cod' style=background-color:red>
                    <td>
                        <a href='#' onclick='enviacodigo($cod)'>$nom</a>
                    </td>
                    
                    <td>$edad</td>
                    
                    <td>$estado</td>
                    </tr>
                ";
                }
                
            }
        
        ?>
    </table>

    <script>

        function enviacodigo(codigo){

            $.post(
                "./graba.php",
                {cod:codigo},
                function(estado){
                    window.location.href="consulta.php"
                }

            );

            
        }
        
    </script>
</body>
</html>