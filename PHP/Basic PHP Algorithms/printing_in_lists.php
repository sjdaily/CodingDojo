<?php
	
function print_lists($array)
{
	echo '<ul>';
	foreach($array as $value)
	{
		echo '<li>' . $value . '</li>';
	}
	echo '</ul>';
}
	
$A = array(2,3,'hello');
echo print_lists($A);

?>