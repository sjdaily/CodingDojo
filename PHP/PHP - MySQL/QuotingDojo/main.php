<?php session_start();

require_once('new-connections.php');
// where all the quotes are displayed
if(!isset($_SESSION['quotes']))
{
	$_SESSION['quotes'] = array();
}

?>
<html>
<head>
	<title>Add Quotes Here</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Here are the awesome quotes!</h1>
	<div><?php
	foreach($_SESSION['quotes'] as $key => $quote)
	{
		echo $quote . '<hr>'; ?>
		<!-- <form action="process.php" method="post">
			<input type='hidden' name='action' value='delete_1'>
			<input type='hidden' name='quote_id' value= "<?= $key ?>">
			<input type="submit" value="die"> 
		</form> -->
		<?php 
	} ?>
	</div>
	<form action="process.php" method="post" id="reset">
		<input type="hidden" name='action' value='delete' />
		<input type="submit" value="Delete Quotes"/>
	</form>
	<form action="process.php" method="post" id="reset">
		<input type="hidden" name='action' value='return' />
		<input type="submit" value="Enter another quote!"/>
	</form>
</body>
</html>

