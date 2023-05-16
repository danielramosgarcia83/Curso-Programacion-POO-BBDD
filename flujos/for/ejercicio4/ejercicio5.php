<?php
for($form=1;$form<5;$form++)
{
	for ($i=1;$i<=2;$i++)
	{
		echo "<form action='' method=''>";
		echo "<input type='text' name='form' placeholder='hola'>";
		echo "<br>";
	}
	echo "<input type='submit' value='enviar'><br>";
	echo "</form>";
}
?>