<?php

//recibir nombre alumno, conectar,grabar tabla, y graba

$nom=$_POST["nombre"];
$hoy= date("Y-m-d");
$ahora=date("H:i:s");
$nota=0;

$conexion=NEW mysqli("10.10.10.199","escorpion","1234","encuestas");
//$conexion=NEW mysqli("localhost","root","","encuestas");
$sqlexa="INSERT INTO examenes (nom_alu,fecha_exa,hora_exa) VALUES ('$nom','$hoy','$ahora')";

if ($conexion->query("$sqlexa"))
    {
        $codexa=$conexion->insert_id;
        for ($i=1; $i <= 10; $i++)
        { 
            $codpre=$_POST["pregunta$i"];
            $codres=$_POST["eleccion$i"];
            $sqlres="INSERT INTO respuestas_alumno (cod_exa,cod_pre,cod_res) VALUES ('$codexa','$codpre','$codres')";
            $conexion->query("$sqlres");
            
            $buscarcorrecta="SELECT * FROM respuestas WHERE cod_res='$codres' AND correcta_res='correcto'";
            $ejecutarconsulta=$conexion->query("$buscarcorrecta");
            if($ejecutarconsulta->fetch_array())
            
            {
                $nota++;
            }
            else
            {
                $nota= $nota+0;
            }

            
        }
        echo "Sacaste un $nota";   
    }
else
    {
        echo "No grabado";
    }
?>