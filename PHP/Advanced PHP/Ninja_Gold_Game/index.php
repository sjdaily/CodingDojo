<?php session_start(); 

if(!isset($_SESSION['gold']))
{
	$_SESSION['gold'] = 0;
}

if(!isset($_SESSION['activities']))
{
	$_SESSION['activities'] = array();
}

?>		

<html>
<head>
	<title>Ninja Gold</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Your Gold: <?= $_SESSION['gold']; ?></h1>
	<div id="boxes">
		<div>
			<h1>Farm</h1>
			<h2>(Earns 10 - 20 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="farm" />
				<input type="submit" value="Find Gold!"/>
			</form>
		</div>
		<div>
			<h1>Cave</h1>
			<h2>(Earns 5 - 10 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="cave" />
				<input type="submit" value="Find Gold!"/>
			</form>
		</div>
		<div>
			<h1>House</h1>
			<h2>(Earns 2 - 5 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="house" />
				<input type="submit" value="Find Gold!"/>
			</form>
		</div>
		<div>
			<h1>Casino!</h1>
			<h2>(Earns/takes 0 - 50 gold)</h2>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="casino" />
				<input type="submit" value="Find Gold!"/>
			</form>
		</div>
	</div>
		
	<h4>Activities: </h4><div id="log"><?php 
		foreach($_SESSION['activities'] as $value)
		{
			echo $value . '<br>';
		} ?></div>

	<form action="process.php" method="post" id="destroy">
		<input type="hidden" name="building" value="destroy" />
		<input type="submit" value="destroy session"/>
	</form>

</body>
</html>