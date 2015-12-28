<?php session_start(); 


if(!isset($_SESSION['errors']))
{
	$_SESSION['errors'] = array();
}

if(isset($_SESSION['errors']))
{
    foreach($_SESSION['errors'] as $error)
    {
        echo "<p>" . $error . "</p>";
    }
}

if(!isset($_SESSION['success']))
{
	$_SESSION['success'] = array();
}

if(isset($_SESSION['success']))
{
	foreach($_SESSION['success'] as $success)
	{
		echo "<p>" . $success . "</p>";
	}
}
?>

<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form action="registration_process.php" method="post" id="form box">
		<input type="hidden" name="action" value="register" />
		Email: <input type="email" name="email" /><br>
		First name: <input type="text" name="first_name" /><br>
		Last Name: <input type="text" name="last_name" /><br>
		Password: <input type="password" name="password" /><br>
		Confirm Password: <input type="password" name="confirm_password" /><br>
		Date of Birth: <input type="date" name="birth_date"/><br>
			<input type="submit" value="Sign Up" />
	</form>
	<form action="registration_process.php" method="post" enctype="multipart/form-data" id="file_upload">
		Upload a profile picture (optional): 
 		<input type='hidden' name='action' value='upload' />
	    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		<input name="userfile" type="file" />
	 	<input type="submit" value="Upload Picture" name="send_file" />
	</form>
	<form action="registration_process.php" method="post" id="clear">
		<input type="hidden" name='action' value='reset' />
		<input type="submit" value="Clear form"/>
	</form>
</body>
</html>
