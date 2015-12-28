<table>
<?php 
	echo "<link rel='stylesheet' type='text/css' href='Int_2.css' />";

		for($i=0; $i<=10; $i++)
      	{ ?>
      <tr>
<?php	for($j=0; $j<=10; $j++)
		{ 
			if($i == 0)
			{
				?>
         <td class="bold"><?= $j; ?></td>
<?php  		} else if($j == 0)
			{ 
				?>
         <td class="bold"><?= $i; ?></td>
<?php  		} else {
//				Select alternating rows and assign different background colors
				if($i % 2 == 0 && $i != 0)
				{ ?> 
					<td class="even"><?= $i * $j; ?></td>
		<?php	} else 
				{ ?> 
					<td class="odds"><?= $i * $j; ?></td>
<?php			} 
  }	} ?>
      </tr>
<?php } ?>
</table>