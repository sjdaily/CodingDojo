<?php
	session_start();
	require('new_connection.php');

	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		// call to function
		// use the ACTUAL POST
		register_user($_POST);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'login')
	{
		login_user($_POST);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'post_message')
	{
		post_message($_POST);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'post_comment')
	{
		post_comment($_POST);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'delete')
	{
	    unset($_SESSION['messages']);
	    $_SESSION['messages'] = array();
	    header('Location:success.php');
		exit();
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'delete_comment')
	{
	    unset($_SESSION['comments']);
	    $_SESSION['comments'] = array();
	    header('Location:success.php');
		exit();
	}
	else // malicious navigation to process.php OR someone is trying to log off
	{
		session_destroy();
		header('location:index.php');
		die();
	}
	// below is saying there is a parameter called post - not real variable
	function register_user($post)
	{
		$_SESSION['errors'] = array();
		//post info to be validated)
		// begin validation checks
		if(empty($post['first_name']))
		{
			$_SESSION['errors'][] = "first name can't be blank!";
		}
		if(empty($post['last_name']))
		{
			$_SESSION['errors'][] = "last name can't be blank!";
		}
		if(empty($post['password']))
		{
			$_SESSION['errors'][] = "password field is required!";
		}
		if($post['password'] !== $post['confirm_password'])
		{
			$_SESSION['errors'][] = "passwords must match!";
		}
		if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errors'][] = "please use a valid email address!";
		} 
		// end of validation checks
		if(count($_SESSION['errors']) > 0) //if I have any errors at all
		{
			header('location: index.php');
			die();
		}
		else // now you need to insert data into database
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) 
			VALUES('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			$_SESSION['success_message'] = 'User successfully created!';
			header('location: index.php');
			die();
		}

	}

	function login_user($post) // just a parameter called post
	{
		$query = "SELECT * FROM users WHERE users.password = '{$post['password']}' 
		AND users.email = '{$post['email']}'";
		$user = fetch_all($query); // go and attempt to grab user with those credentials
		if(count($user) > 0)
		{
			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['first_name'] = $user[0]['first_name'];
			$_SESSION['last_name'] = $user[0]['last_name'];
			$_SESSION['logged_in'] = TRUE;
			header('location: success.php');
			die();
		}
		else 
		{
			$_SESSION['errors'][] = "can't find a user with those credentials";
			header('location: index.php');
			die();
			// don't have to declare errors as array because empty brackets tell php it's an array
			// dont have to worry about resetting because code is already written above
		}
	}

	function post_message($post) 
	{

		if(empty($post['message']))
		{
			$_SESSION['errors'][] = "Message field cannot be blank";
		}
		else 
		{
			$_SESSION['messages'][] = $post['message'];

			$query = "INSERT INTO messages (user_id, message, created_at, updated_at) 
			VALUES('{$_SESSION['user_id']}', '{$post['message']}',NOW(), NOW())";
			run_mysql_query($query);
			$query_3 = "SELECT * FROM messages";
			$_SESSION['messages'] = fetch_all($query_3);


			header('location: success.php');
			die();
			// in line 94, user_id session variable is created, but how can I retrieve message id from db 
			// and use it in a session variable? 
		}

	}
	function post_comment($post) 
	{
		if(empty($post['comment']))
		{
			$_SESSION['errors'][] = "Comment field cannot be blank";
		}
		else 
		{
			$_SESSION['comments'][] = $post['comment'];

			$query_2 = "INSERT INTO comments (message_id, user_id, comment, created_at, updated_at) 
			VALUES('{$_POST['message_id']}', '{$_SESSION['user_id']}', '{$post['comment']}',NOW(), NOW())";
			run_mysql_query($query_2);
			header('location: success.php');
			die();
		}
	}

?>