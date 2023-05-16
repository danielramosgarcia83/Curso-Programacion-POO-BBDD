<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
    <body  style="width:100%">
        <div class="menu" style="width:100%;">
            <ul style="width:100%; float:left; list-style-type:none; background-color:pink;">
                <li style="width:25%; float:left;"><a href="#" onclick="mostrar('1','botones')";>Altas</a></li>
                <li style="width:25%; float:left;"><a href="#" onclick="mostrar('2','botones')">Consultas</a></li>
                <li style="width:25%; float:left;"><a href="#" onclick="mostrar('3','botones')">Modificar</a></li>
                <li style="width:25%; float:left;"><a href="#" onclick="mostrar('4','botones')">Borrar</a></li>
            </ul>   
        </div>
        <div id="botones" style="width=100%; text-align: center; display:none";>
            <label id="etiqueta" for=""></label>
            <button id="botones1" style="width=25%;"></button>
            <button id="botones2" style="width=25%;"></button>
            <button id="botones3" style="width=25%;"></button>
        </div>
<script src="./../js/funciones.js"></script>
    </body>
</html>