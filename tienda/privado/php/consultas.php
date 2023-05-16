<?php
include("./menuCRUD.php");

$tabla=$_GET["cod"];
$categoria="AAA";
//include("./conexion.php");
//$conexion=new mysqli("localhost","cabreiroa","agua","tiendados");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>
        function enviardatos()
        {
            var Nombre;
            var papellido;
            var sapellido;
            nombre= $("input#nombre").val();
            papellido= $("input#apellido1").val();
            sapellido= $("input#apellido2").val();
            
            if(nombre != "" && papellido != "" && sapellido != "")
            {
                $.post //es una funcion, con 3 parametros (URL,DATOS,funcion que recoje los datos echos que hace el php)
                (
                    "./graba.php",
                    {nom:nombre, ap1:papellido, ap2:sapellido}, //nom es como el name del input, que viaja por POST y lo captura el php
                    function(resultado)
                    {
                        //alert(resultado); aqui es un mensaje en pantalla
                        $("h1").text(resultado);
                        $("input[type='text']").val(""); //Borrar todos los input text, sino pones text borraria todos los input incluido el button
                    }

                );
            }
            else
            {
                alert("No puedes dejar inputs vacios");
            }
        }
    </script>

</body>
</html>
