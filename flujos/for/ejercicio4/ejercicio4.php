<?php
$cont=0;
for($i=1;$i<101;$i++)
	{
		$cont++;
		if($cont==1)
		{
		echo " $i";
		}
		else
			
			if($cont==2)
			{
				echo "<B> $i</b>";
			}
			else
			{
				echo $i;
				echo "<br>";
				$cont=0;
			}	
	}


?>