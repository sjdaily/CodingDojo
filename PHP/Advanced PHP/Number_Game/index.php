<?php session_start(); ?>

<html>
<head>
	<title>Advanced Assign 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<h3>I am thinking of a number between 1 and 100!</h3>
	<h3>Take a guess!</h3>
	<?php
	$myNumber = rand(1, 100);

	if(isset($_SESSION['guess']))
		if($_SESSION['guess'] < $myNumber)
		{ ?>
			<div>Too Low!</div><?php
		}
		else if($_SESSION['guess'] > $myNumber)
		{ ?>
			<div>Too High!</div><?php		
		}
		else 
		{ ?>
			<div id="correct">
				<p><?= $myNumber; ?> was the number!</p>
				<form action="index.php" method="post">	
					<input type="submit" value="Play again!">
				</form><?php
					unset($_SESSION['guess']); ?>
			</div> <?php
		}
	?>

	<form action="process.php" method="post">
		<input type="text" name="box"><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<!-- process page says error but it still works correctly with form after if statement. 
	Could limit input to 1-100 range if user attempts to input <0 or >100 -->