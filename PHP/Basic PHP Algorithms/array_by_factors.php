<?php

function multiply($array, $factor)
{
	foreach($array as $key => $value)
	{
		$value = $value * $factor;
		$array[$key] = $value;
	}
	return $array;
}

$A = array(2,4,10,16);

$B = multiply($A, 5);

var_dump($B);

?>