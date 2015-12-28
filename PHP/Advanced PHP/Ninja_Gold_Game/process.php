<?php session_start(); 
// session_destroy();
if(isset($_POST['building']) && $_POST['building'] == "destroy")
{
	session_destroy();
	header('Location:index.php');
	exit();
}

if(!isset($_SESSION['gold']))
{
	$_SESSION['gold'] = 0;
	$_SESSION['activities'] = array();
}

if(isset($_POST['building']) && $_POST['building'] == "farm")
{
	$building = "farm";
	$_SESSION['building'] = $building;
	$gold = rand(10, 20);
	$_SESSION['farm_gold'] = $gold;
	$_SESSION['gold'] = $_SESSION['gold'] + $gold;
	$_SESSION['activities'][] = 'You entered the ' . $_SESSION['building'] . ' and 
			earned ' . $_SESSION['farm_gold'] .  ' gold.';
	header('Location:index.php');
	exit();
}

if(isset($_POST['building']) && $_POST['building'] == "cave") 
{
	$building = "cave";
	$_SESSION['building'] = $building;
	$gold = rand(5, 10);
	$_SESSION['cave_gold'] = $gold;
	$_SESSION['gold'] = $_SESSION['gold'] + $gold;
	$_SESSION['activities'][] = 'You entered the ' . $_SESSION['building'] . ' and 
		earned ' . $_SESSION['cave_gold'] .  ' gold.';
	header('Location:index.php');
	exit();
}

if(isset($_POST['building']) && $_POST['building'] == "house")
{
	$building = "house";
	$_SESSION['building'] = $building;
	$gold = rand(2, 5);
	$_SESSION['house_gold'] = $gold;
	$_SESSION['gold'] = $_SESSION['gold'] + $gold;
	$_SESSION['activities'][] = 'You entered the ' . $_SESSION['building'] . ' and 
		earned ' . $_SESSION['house_gold'] .  ' gold.';
	header('Location:index.php');
	exit();
}

if(isset($_POST['building']) && $_POST['building'] == "casino") 
{
	$building = "casino";
	$_SESSION['building'] = $building;
	$gold = rand(-50, 50);
	$_SESSION['casino_gold'] = $gold;
	$_SESSION['gold'] = $_SESSION['gold'] + $gold;
	$_SESSION['activities'][] = 'You entered the ' . $_SESSION['building'] . ' and ';
		if($_SESSION['casino_gold'] < 0)
		{ 
			$_SESSION['activities'][] = ' lost ' . ($_SESSION['casino_gold'] * -1) . ' gold...ouch!';
		}
		else{ 
			$_SESSION['activities'][] = ' gained ' . $_SESSION['casino_gold'] . ' gold.';
			}	 
	header('Location:index.php');
	exit();
}


?>