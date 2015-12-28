<?php

$users = array();
$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function print_keys($array)
{	
	echo 'There are ' . count($array) . ' keys in this array: ';
	
	foreach($array as $key => $value)
	{
		echo $key . ', ';
	}	
	echo '<br>';

	foreach($array as $key => $value)
	{	
		echo 'The value in the key' . ' ' . $key . ' is ' . $value . '.' . '<br>';
	}
}

echo print_keys($users);

?>