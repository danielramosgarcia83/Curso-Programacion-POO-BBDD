<?php
//recoger datos referentes al ANUNCIO,los DATOS!!!

$nomanu=$_POST["nombre"];
$preanu=$_POST["precio"];
$desanu=$_POST["descripcion"];

//Llamamos conexion

include("./conexion.php");
//hacemos sql grabar tabla anuncio
$sqlanu="INSERT INTO anuncios (nom_anu, precio_anu, des_anu) VALUES ('$nomanu','$preanu','$desanu')";

//ejecutamos preguntando

if ($conexion->query($sqlanu))
{
	//se graba el anuncio. NECESITAMOS SABER EL CODIGO
	$codanu=$conexion->insert_id;
	//Vamos a crear la carpeta en donde se va a guardar las imagenes
	
	mkdir("./../imagenes/$codanu",0777);
	//vamos con las imagenes
	//vamos a recoger el contador para poder llevar acabo la grabacion y movimiento de las imagenes
	
	$contador=$_POST["contador"];
	
	for($i=1;$i<=$contador;$i++)
	{
		$archivo=$_FILES["archivo$i"]["name"];
		//sql para grabar imagen
		$sqlima="INSERT INTO imagenes (cod_anu,nom_ima) VALUES ('$codanu','$archivo')";
		
		//ejecutamos preguntando
		
		if($conexion->query($sqlima))
		{
			//se grabó imagen en tabla, VAMOS A MOVER LA IMAGEN A LA CARPETA
			$ruta="./../imagenes/$codanu/$archivo";
			@move_uploaded_file($_FILES["archivo$i"]["tmp_name"],$ruta);
		}
		else
		{}
		
	}
	echo "<script>
		alert('Anuncio registrado');
		window.location.href='./../index.html';
	</script>";
}
else
{
	echo "<script>
		alert('Error, intenta otra vez');
		window.location.href='./../index.html';
	</script>";
}	



?>