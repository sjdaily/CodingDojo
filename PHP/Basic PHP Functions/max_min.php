<?php

$numbers = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);

function get_max_and_min($array){
	$max = 0;
	$min = 99999;

	for($i = 0; $i < count($array); $i++)
	{
		if($array[$i] > $max)
		{
			$max = $array[$i];
			$array[] = $max;
		}
		if($min > $array[$i])
		{
			$min = $array[$i];
			$array[] = $min;
		}
	}

	$array = array("min" => $min, "max" => $max);
	return $array;

}

$output = get_max_and_min($numbers);
var_dump($output);


?>