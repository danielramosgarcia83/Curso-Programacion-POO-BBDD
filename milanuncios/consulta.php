<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="todo">
			
			<?php
				include("./php/conexion.php");
				$sqlanu="SELECT * FROM anuncios";
				$ejecutar=$conexion->query($sqlanu);
				foreach($ejecutar as $registro)
					{
						$titulo=$registro["nom_anu"];
						$precio=$registro["precio_anu"];
						$codigo=$registro["cod_anu"];

						$sqlima="SELECT * FROM imagenes WHERE cod_anu='$codigo'";
						$ejecutaima=$conexion->query($sqlima);
						$registroima=$ejecutaima->fetch_array();
						$imagen=$registroima["nom_ima"];
						$ruta="./imagenes/$codigo/$imagen";
			?>
			
			<div class="anuncio">

				<div class="imagen">
					<img src="<?php echo $ruta;?>">
				</div>
				<div class="titulo">
					<h3><?php echo $titulo;?></h3>
				</div>
				<div class="precio">
					<p><?php echo $precio;?></p>
				</div>
				<div class="boton">
					<button onclick="window.location.href='./php/botondetalle.php?cod=<?php echo $codigo?>'";>Ver</button>
				</div>
			</div>
			<?php
				};
			?>
			
		
		</div>
	</body>
</html>