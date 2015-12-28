<?php session_start(); ?>

<html>
<head>
	<title>Login/Register Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		if(isset($_SESSION['errors']))
		{
			foreach($_SESSION['errors'] as $error)
			{
				echo "<p class='error'> {$error} </p>";
			}
			unset($_SESSION['errors']);
			// refresh page and errors will be gone
		}
		if(isset($_SESSION['success_message']))
		{
			echo "<p class='success'> {$_SESSION['success_message']} </p>";
			unset($_SESSION['success_message']);
		}


	?>
	<h1>Welcome to the Wall!</h1>
	<h2>Register</h2>
	<form action='process.php' method='post'>
		First name: <input type='text' name='first_name'><br>
		<input type='hidden' name='action' value='register'>
		Last name: <input type='text' name='last_name'><br>
		Email address: <input type='text' name='email'><br>
		Password: <input type='password' name='password'><br>
		Confirm Password: <input type='password' name='confirm_password'><br>
		<input type='submit' value='register'>
	</form>
	<h2>Login</h2>
	<form action='process.php' method='post'>
		<input type='hidden' name='action' value='login'>
		Email address: <input type='text' name='email'><br>
		Password: <input type='password' name='password'><br>
		<input type='submit' value='login'>
	</form>
</body>
</html>