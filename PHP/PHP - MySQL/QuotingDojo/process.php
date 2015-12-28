<?php session_start();
require_once('new-connections.php');

if(isset($_POST['action']) && $_POST['action'] == 'delete_1')
{
    var_dump($_POST);
    die();
}
if(isset($_POST['action']) && $_POST['action'] == 'reset')
{
    unset($_SESSION['errors']);
    $_SESSION['errors'] = array();
    header('Location:index.php');
	exit();
}
if(isset($_POST['action']) && $_POST['action'] == 'delete')
{
    unset($_SESSION['quotes']);
    $_SESSION['quotes'] = array();
    header('Location:main.php');
	exit();
}
if(isset($_POST['action']) && $_POST['action'] == 'return')
{
    header('Location:index.php');
	exit();
}

if(!isset($_SESSION['quotes']))
{
	$_SESSION['quotes'] = array();
}

if(isset($_POST['add_quote']) && $_POST['add_quote'] == "add")
{
	$_SESSION['errors'] = array();
	if(!isset($_SESSION['message']))
	{
		$_SESSION['message'] = array();
	}
	$quote = $_POST['quote'];
	$name = $_POST['name'];
	$date = date("g:i A") . ' on ' . date("M j, Y");

	// Please include simple validation that checks for the presence of the user's name and their quote.
	if(empty($_POST['name']))
    {
        $_SESSION['errors'][] = "Please enter your name";
    }
    if(empty($_POST['quote']))
    {
        $_SESSION['errors'][] = "Please enter a quote";
    }
    // end of validation checks
	if(!empty($_SESSION['errors']))
	{
		header('Location: index.php');
		exit();
	} else
	{
		$_SESSION['quotes'][] = '"' . $quote . '"' . '<br>' . '  - ' . $name . ' at ' . $date . '<br>';
		// Add validations here to make sure information is correct
		// if validations check out we insert the records into the database
		$query = "INSERT INTO quotes (content) VALUES($quote)";
		if(run_mysql_query($query))
		{
		    $_SESSION['message'] = "New quote has been added correctly!";
		}
		else
		{
		    $_SESSION['message'] = "Failed to add new quote"; 
		}
		header('Location:main.php');
		exit();
	}
}
if(isset($_POST['add_quote']) && $_POST['add_quote'] == "skip")
{
	header('Location:main.php');
	exit();
}

?>