<?php session_start();
require('new_connection.php');

if(!isset($_SESSION['messages']))
{
	$_SESSION['messages'] = array();
}
if(!isset($_SESSION['comments']))
{
	$_SESSION['comments'] = array();
}

?>

<html>
	<head>
		<title>Wall Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="topbar">
			<h3>CodingDojo Wall</h3>
			<?php
			echo "<p>Hello, {$_SESSION['first_name']}!</p>";
			echo "<a href='process.php'> Log Off! </a>"; ?>
		</div>
		<h2>Post a Message!</h2>
		<!-- start of message form -->
		<form action='process.php' method='post'>
			<input type='hidden' name='action' value='post_message'>
			<input type='text' name='message' id="message_box"><br>
			<input type='submit' value='Post'>
		</form>
		<!-- end of message form -->
		<h2>Messages</h2>
	<?php

	 	// messages need to be ordered most recent on top  
		foreach($_SESSION['messages'] as $message)
		{ ?>
			<div class="large_div"><?php
				echo "<strong>" . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . 
					' - ' . $message['created_at'] . "</strong><br>";
				echo '<p>' . $message['message'] . '</p>'; 

				$query = "SELECT * FROM comments LEFT JOIN users on 
					comments.user_id = users.id WHERE comments.message_id = " . $message['id']; 
				$comments = fetch_all($query);
				?> 
				<div class="comment_div">
					<h2>Comments</h2><br><?php
					foreach($comments as $comment)
					{
						echo '<strong>' . $comment['first_name'] . ' ' . $comment['last_name'] . 
							' - ' . $comment['created_at'] . '</strong>';
						echo '<p>' . $comment['comment'] .  '</p>';
					} ?> 
			
					<!-- start of comment form -->
					<h3>Post a Comment!</h3>
					<form action='process.php' method='post'>
						<input type='hidden' name='action' value='post_comment'>
						<input type='hidden' name='message_id' value="<?= $message['id'] ?>">
						<input type='text' name='comment' id="comment_box"><br>
						<input type='submit' value='Post' id="comment">
					</form>
					<!-- end of comment form -->
				</div>
			</div><?php	
		} ?>
	
	<form action="process.php" method="post">
		<input type="hidden" name='action' value='delete' />
		<input type="submit" value="Delete Messages" id="delete_messages"/>
	</form>	
	<form action="process.php" method="post">
		<input type="hidden" name='action' value='delete_comment' />
		<input type="submit" value="Delete Comments" id="delete_comments"/>
	</form>	
	</body>
</html>