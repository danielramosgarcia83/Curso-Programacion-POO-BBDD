<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Pregunta</title>
    </head>
    <body>

    <center>
        <h1>Crear Respuestas</h1><hr>
        <button onclick="window.location.href='index.html'">Volver</button>
        <hr>
        <form action="grabarespuesta.php" method="POST">
        
    <?php
    $con=NEW mysqli("localhost","root","","encuestas");
    //$con=NEW mysqli("10.10.10.199","escorpion",1234,"encuestas");

    $sqlconsulta="SELECT * FROM preguntas ORDER BY pregunta_pre ASC";
    $ejecutar=$con->query($sqlconsulta);

    ?>

    <form action="grabarrespuesta.php" method="POST">
        <select name="pregunta" style="width: 50%;" required>
        <option>Selecciona Pregunta</option>
        <?php
        foreach($ejecutar as $registro)
    {
        
        $nom_pregunta=$registro["pregunta_pre"];
        $cod_pregunta=$registro["cod_pre"];?>
        <option value="<?php echo $cod_pregunta?>"><?php echo $nom_pregunta;?></option>
        
    <?php
    };
    ?>
        
        </select><br><br>

        <label>Respuesta #1<input type="text" name="respuesta1" style="width: 50%;"></label>
        <select name="correcta1">
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>
        </select><br>
        <label>Respuesta #2<input type="text" name="respuesta2" style="width: 50%;"></label>
        <select name="correcta2">
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>
        </select><br>
        <label>Respuesta #3<input type="text" name="respuesta3" style="width: 50%;"></label>
        <select name="correcta3">
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>
        </select><br>
        <input type="submit" value="Grabar">
        </form>
        
        </center>
    </body>
</html>