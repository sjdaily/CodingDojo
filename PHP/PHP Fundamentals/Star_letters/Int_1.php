<?php

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

function draw_stars($array)
{
	foreach($array as $key => $value)
	{
		$string = is_string($value);
		
		if(!$string)
		{
			for($i=0; $i< $value; $i++)
			{
				$star = '*';
		    	echo $star;
			} 
			echo '<br>';
		}

		if($string)
		{
			for($i=0; $i < strlen($value); $i++)
			{
				$letter = $value[0];
				echo strtolower($letter);
			}
			echo '<br>';
		}	
	} return "hello";
}

draw_stars($x);

?>