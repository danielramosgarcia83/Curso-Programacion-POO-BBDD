<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
</body>
<h1>Cuenta Click</h1>
        <?php
            include("./conexion.php");
            //$conexion= new mysqli("10.0.0.251","root","root","click");
            $sql="SELECT * FROM botones";
            $ejecutar=$conexion->query($sql);
            echo "
            <button id='reset' onclick='reset()'>RESET</button><br><br>
            ";
            foreach($ejecutar as $registro)
            {
                $cod=$registro["cod_bot"];
                $nom=$registro["nom_bot"];
                $cantidad=$registro["cant_bot"];
                    echo "<button style='background-color:cyan', id='$cod' onclick='contar($cod,this.id)'>$nom $cantidad veces</button><br><br><br>";
                };
                
        ?>
    <script>
        function contar(cod,id){
                $.post(
                "./contabilizar.php",
                {codigo:cod},
                function(totalclick){
                    $("#"+id).text(totalclick);
                }
                );
            };
            function reset(){
                $.post(
                "./limpiar.php",
                {reset:0},
                function(echolimpiar){
                    window.location.href="cuentaclic.php";

                }
                );
            };
            
    </script>
</body>
</html>
<!--$("button").each(function(){
$(this).text(0)
});
$("#reset").text("RESET");-->