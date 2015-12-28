<?php session_start();

require_once('new-connections.php');

if(!isset($_SESSION['errors']))
{
	$_SESSION['errors'] = array();
}

// Build a simple app that allows users to add quotes to a database and display them on a separate page
// where users will add their quotes
// The 'add my quote' button should add the user's quote to the database, but the 'skip to quotes' button should take the user directly to the main page.  

?>

<html>
<head>
	<title>Add Quotes Here</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Welcome to Quoting Dojo</h1>
<?php
	if(isset($_SESSION['errors']))
	{
	    foreach($_SESSION['errors'] as $error)
	    {
	        echo "<p>" . $error . "</p>";
	    }
	} ?>
	<form method="post" action="process.php" id="main_form">
		Your Name: <input type="text" name="name" id="name_box" /><br>
		Your Quote: <input type="text" name="quote" id="quote_box"/><br>
		<input type="hidden" name="add_quote" value="add" />
		<input type="submit" value="Add my Quote!" />
	</form>
	<form method="post" action="process.php">
		<input type="submit" value="Skip to quotes" id="skip"/>
		<input type="hidden" name="add_quote" value="skip" />
	</form>
	<form action="process.php" method="post" id="reset">
		<input type="hidden" name='action' value='reset' />
		<input type="submit" value="Reset Form"/>
	</form>
</body>
</html>