<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Times Project</title>
	<style type="text/css">
		body {
			border: 2px dotted navy;
			width: 400px;
			margin: 10px auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>The current date and time: </h2>
<?php
	$time = $this->session->userdata('last_activity');
	echo '<p>' . date("F d, Y", $time) . '</p>';
    echo '<p>' . date("g:i A", $time) . '</p>';
?>
</body>
</html>