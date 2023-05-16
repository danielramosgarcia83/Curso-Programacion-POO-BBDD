<form action="" method="">

	<?php
	
	$cont=1;
	while($cont<=10)
	{
		echo "<input type'text' name='caja $cont' placeholder='caja $cont'>";
		echo "<br>";
		$cont++;
	}

	?>
	<input type="submit" value="enviar">
</form>