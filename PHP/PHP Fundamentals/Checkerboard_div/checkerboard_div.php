
<?php
	echo "<link rel='stylesheet' type='text/css' href='div_style.css' />"; ?>
	
<div class= "container">	<?php
for($i = 0; $i < 8; $i++)
{ ?>
	<div class="row"> <?php
		for($j = 0; $j < 8; $j++)
		{ 
			if($j % 2 == 0 && $i % 2 == 0)
			{ ?>
				<div class="red"> </div><?php
			} 
			else if($j % 2 != 0 && $i % 2 != 0)
			{ ?>
				<div class="red"> </div><?php
			}
			else if($j % 2 == 0 && $i % 2 != 0)	
			{ ?>
				<div class="black"> </div><?php
			}
			else 
			{ ?>
				<div class="black"> </div><?php
			}
		} ?>
	</div> <?php
}  ?>
</div>

<!-- It seems more logical to use <tables> than div's to
	 create the checkerboard - Is it not a good practice to
	 use tables for things like this because the checkerboard
	 is layout based and not data-based? -->
