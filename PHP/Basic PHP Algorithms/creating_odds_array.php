<?php

$odds = array();

for($number = 1; $number <= 20000; $number++)
{
	if($number % 2 != 0)
	{
	$odds[] = $number;
	}
}
 
var_dump($odds);

?>