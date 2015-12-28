<?php

$heads = 0;
$tails = 0;

for($i = 1; $i <= 5000; $i++)
{
	$toss = rand(0, 1);
	echo '<h4>' . "Attempt # " . $i . ': ' . '</h4>';
	echo "Throwing a coin...";

	if($toss == 0) 
	{
		echo "It's a head! - "; 
		$heads++;
	}
	else if ($toss == 1) 
	{
		echo "It's tails! - "; 
		$tails++;
	}

	echo "You've gotten " . $heads . " head(s) and " . $tails . " tail(s) so far " . '<br>';
}

?>