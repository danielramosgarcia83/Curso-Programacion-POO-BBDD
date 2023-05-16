<?PHP
	$variable="";
	
	//TENGO QUE RECOGER LOS INPUTS QUE VIENEN DEL INDEX


	$nom=$_GET["nombrespersona"];
	$ape=$_GET["apellidospersona"];
	
	echo "te llamas $nom y te apellidas $ape";
	//te muestra en pantalla
	echo "<br>";
	echo 'te llamas $nom y te apellidas $ape';
	
	//enviaremos datos a la BD
	
	//me debo conectar a la BD
	
	
	$servidor="localhost";
	$usuario="root";
	$contrasena="";
	$basededatos="ficticia";
	
	//la conexion se establece asi:
	
	$conexion=new mysqli($servidor, $usuario,$contrasena,$basededatos);
	
	
	//$conexion=new mysqli("localhost", "root","","ficticia"); seria de forma manual, seria lo mismo, por dar un ejemplo, porq se usan variables
	
	
	//como grabar los datos en la tabla correspondiente, las base de datos son en SQL, entonces en ese lenguaje lo haremos.
	
	
	$sql="INSERT INTO nombretabla (campo1, campo2) values ('$nom','$ape')";
	
	
	//vamos a ejecutar la grabacion:
	
	
	
	$conexion->query($sql);	
	
	//en esta conexion ejecutas el sql que he escrito.
	
	
	
	
	
	
?>