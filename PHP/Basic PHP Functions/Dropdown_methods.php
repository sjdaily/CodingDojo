<?php

$states = array('CA','WA', 'VA', 'UT', 'AZ');

// make dropdown menu using for loop 
echo '<select>';
for($i = 0; $i < count($states); $i++)
{ 	?>
		<option> <?= $states[$i] ?> </option>
	<?php
}
echo '</select>';

// same thing with foreach loop
echo '<select>';
foreach ($states as $state) 
{
	echo '<option>' . $state . '</option>';
}
echo '</select>';

//  insert 3 new states to $states array
array_push($states, 'NJ', 'NY', 'DE');

// start of third dropdown menu 
echo '<select>';
foreach ($states as $state)
{
	echo '<option>' . $state . '</option>';
}
echo '</select>';

?>