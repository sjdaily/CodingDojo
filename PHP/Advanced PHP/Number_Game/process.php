<?php 
	session_start();

	$guess = $_POST['box'];
	$_SESSION['guess'] = $guess;

	header('Location:index.php');
	exit();
?>