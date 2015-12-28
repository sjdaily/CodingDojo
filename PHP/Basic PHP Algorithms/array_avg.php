<?php

$numbers = array(1, 2, 5, 10, 255, 3);
$sum = 0;
$avg = 0;

foreach($numbers as $number) {
	$sum = $sum + $number;
	$number++;
}

$avg = $sum / (count($numbers));
echo $avg;

?> 