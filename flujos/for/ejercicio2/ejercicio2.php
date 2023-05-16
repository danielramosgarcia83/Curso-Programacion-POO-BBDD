<?php

$semana=0;
for($i=1;$i<=30;$i++)
{
	$semana++;
	echo "$i";
		if($semana==7)
		{
			echo "<br>";
			$semana=0;
		}
		else
		{}	
}
?>