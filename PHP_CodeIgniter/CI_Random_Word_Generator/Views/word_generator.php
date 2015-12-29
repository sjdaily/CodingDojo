<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	body {
		width: 500px;
		height: 700px;
		margin:20px auto;
		text-align: center;
		font-family: Tahoma;
	}
	form {
		width: 70px;
		height: 30px;
		margin:5px auto;
		padding:5px;
	}
	input[type='submit'] {
		background-color: #006bff;
		color: white;
		padding:5px;
		padding-left:15px;
		padding-right:15px;
		border: 2px solid black;
	}
	h3 {
		border: 2px solid black;
		width: 250px;
		height: 50px;
		margin: 5px auto;
		padding-top:15px;
		vertical-align: middle;
	}
</style>
</head>
<body>
	<p>Random Word (attempt # <?= $this->session->userdata('counter') ?>)</p>
	<h3> <?= $this->session->userdata('string') ?> </h3>
	<form action="/Words/random" method="post">
		<input type="hidden" name="generate">
		<input type="submit" value="Generate">
	</form>
</body>
</html> 