<table>
<?php
	echo "<link rel='stylesheet' type='text/css' href='table.css' />";
	
for($i = 0; $i < 8; $i++)
{ ?>
	<tr> <?php
		for($j = 0; $j < 8; $j++)
		{ 
			if($j % 2 == 0 && $i % 2 == 0)
			{ ?>
				<td class="red"> </td><?php
			} 
			else if($j % 2 != 0 && $i % 2 != 0)
			{ ?>
				<td class="red"> </td><?php
			}
			else if($j % 2 == 0 && $i % 2 != 0)	
			{ ?>
				<td class="black"> </td><?php
			}
			else 
			{ ?>
				<td class="black"> </td><?php
			}
		} ?>
	</tr> 

<?php
}  ?>

</table>


