<?php

for($i = 0; $i <= 100; $i++)
{
	$score = rand(50, 100);

	if($score < 70)
	{ ?>
		<h1> Your score is:&nbsp; <?= $score ?> /100 </h1><br> 
		<h2> Your grade is: D </h2><br>  
	<?php
	}

	else if($score < 80)
	{ ?>
		<h1> Your score is:&nbsp; <?= $score ?> /100 </h1><br> 
		<h2> Your grade is: C </h2><br>  
	<?php
	}

	else if($score < 90)
	{ ?>
		<h1> Your score is:&nbsp; <?= $score ?> /100 </h1><br> 
		<h2> Your grade is: B </h2><br>  
	<?php 
	}
	else if($score <= 100)
	{ ?>
		<h1> Your score is:&nbsp; <?= $score ?> /100 </h1><br> 
		<h2> Your grade is: D </h2><br>  
	<?php
	}
}

?>