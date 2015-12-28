<?php

echo '<link rel="stylesheet" type="text/css" href="Adv_1.css" />';

 	
$users = array( 
   		array('first_name' => 'Michael', 'last_name' => 'Choi'),
  		array('first_name' => 'John', 'last_name' => 'Supsupin'),
  		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   		array('first_name' => 'KB', 'last_name' => 'Tonel'),
   		array('first_name' => 'Cole', 'last_name' => 'Smith'), 
   		array('first_name' => 'Jacob', 'last_name' => 'Tark'), 
   		array('first_name' => 'Liz', 'last_name' => 'Murphy'), 
   		array('first_name' => 'Ryan', 'last_name' => 'Martin'), 
   		array('first_name' => 'Juan', 'last_name' => 'Rico'), 
   		array('first_name' => 'Reed', 'last_name' => 'Ford'), 
   		array('first_name' => 'Thomas', 'last_name' => 'Powell'), 
   		array('first_name' => 'Bentley', 'last_name' => 'Klaus'), 
   		array('first_name' => 'India', 'last_name' => 'Newton'), 
   		array('first_name' => 'Niko', 'last_name' => 'Mason') 
);

$count = 0; ?>

<table>
	<tr class="topbar">
		<td>User #</td>
		<td>First Name</td>
		<td>Last Name</td>	
		<td>Full Name</td>
		<td>Full Name in Upper Case</td>
		<td>Length of Full Name (without spaces)</td>
	</tr>
<?php

	for($i = 0; $i < count($users); $i++)
	{ 
		$count = $count + 1;
		$first = $users[$i]['first_name'];
		$last = $users[$i]['last_name'];
		$first_last = $first . ' ' . $last;
		$upper_name = strtoupper($first_last);
		$length = strlen($first) + strlen($last);

		if($count % 5 == 0 && $count != 0) 
		{ ?>
			<tr class="fives">
				<td class="user_count"><?= $count; ?></td>
	 			<td><?= $first; ?></td>
		    	<td><?= $last; ?></td>
		 		<td><?= $first_last; ?></td>
		 		<td><?= $upper_name; ?></td>
				<td><?= $length; ?></td>
			</tr> <?php
		}
		else if($count % 5 != 0)
		{ ?>
			<tr>
				<td class="user_count"><?= $count; ?></td>
	 			<td><?= $first; ?></td>
		    	<td><?= $last; ?></td>
		 		<td><?= $first_last; ?></td>
		 		<td><?= $upper_name; ?></td>
				<td><?= $length; ?></td>
			</tr> <?php
		}
	}
?>
</table>


<?php 

?>
