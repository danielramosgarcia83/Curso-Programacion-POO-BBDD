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
?>
<html>
<head>
    <meta charset="UTF-8">
    <!--jquery.quicksearch link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.4.0/jquery.quicksearch.js" integrity="sha512-U+KdQxKTQfGIQJBs2QyDiU3PxJoSu+ffUJV5AAuMmwSFs1CjBz5Xk3/qWrT0mBHOM/C15q3DMko6HJL+37MYNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Consultar</title>
    
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
            <H1 style="text-align: center;">Consultar Entradas y Salidas</H1>
            <input type="text" id="buscar" placeholder="Buscar" onkeyup="filtrar()">
            <br>
            <a href="./consultardes.php">Descargar</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Código Alumno</th>
                        <th>Nombre Alumno</th>
                        <th>Tipo Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sqlreg="SELECT * FROM registros
                                    INNER JOIN alumnos USING(cod_alu)";
                        $ejreg=$con->query($sqlreg);
                        foreach($ejreg as $registroreg)
                        {
                            $fecha=$registroreg["fecha_reg"];
                            $hora=$registroreg["hora_reg"];
                            $tipo=$registroreg["tipo_reg"];
                            $codalu=$registroreg["cod_alu"];
                            $nomalu=$registroreg["nom_alu"];
                        ?>
                        <tr>
                        <td><?php echo "$fecha";?></td>
                        <td><?php echo "$hora";?></td>
                        <td><?php echo "$codalu";?></td>
                        <td><?php echo "$nomalu";?></td>
                        <td><?php echo "$tipo";?></td>
                        </tr>
                        <?php
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<script type="text/javascript">



//2 opciones para el QUICKSEARCH:

// 1)Con una funcion, en este caso, en un input con el evento ONKEYUP
        function filtrar(){
            $("#buscar").quicksearch("table tbody tr");
        }
//2) FUNCION ANONIMA, ejecutada cuando sea llamada por alquien, dentro de una funcion para q no se ejecute siempre
//en este caso, estará siempre a la escucha del identificador #buscar
        $(function(){ 

        })
        </script>
</body>
</html>
<?php
}
else
{
    header("location:./../index.html");
}
?>