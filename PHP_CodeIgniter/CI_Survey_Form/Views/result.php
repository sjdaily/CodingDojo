<html>
<head>
	<title></title>
	<style type="text/css">
	body {
		width: 500px;
		height: 700px;
		margin:20px auto;
	}	
	#result_box {
		border: 2px solid black;
		width: 300px;
		height: 220px;
		padding: 5px;
		margin:20px auto;
		text-align: left;
	}
	#result_box p {
		margin:10px;
		margin-left:20px;
	}
	h5 {
		text-decoration: underline;
		font-size:16px;
		margin:10px;
	}
	#back {
		border-style: none;
		width: 80px;
		height: 40px;
	}
	#back input[type='submit'] {
		background-color: #006bff;
		color: white;
		padding:5px;
		margin: 5px;
		margin-left: 25px;
		border: 2px solid black;
	}
	#submitted {
		margin:20px auto;
		width: 300px;
		height: 60px;
		background-color: #65f083;
		border: 2px solid black;
		padding:5px;
		font-size: 14px;
	}
</style>
</head>
<body>
	<!-- start of results page - URL to be /results -->
	<div id="submitted">
		<p>Thanks for submitting this form! You have submitted this form <?= $this->session->userdata('counter') ?> times now.</p>
	</div>
	<div id="result_box">
		<h5>Submitted Information</h5>
		<p>Name: <?= $name ?> </p>
		<p>Dojo Location: <?= $location ?> </p> 
		<p>Favorite Language: <?= $language ?> </p>
		<p>Comment: <?= $comment ?>  </p> 
		<!--start of hidden input back button to reset sess and send user back to empty form page -->
		<form action="/" method="post" id="back">
			<input type="hidden" name="go_back">
			<input type="submit" value="Go Back">
		</form>
		<!--end of hidden input back button to reset sess and send user back to empty form page -->
	</div>
		<!-- end of results page -->
</body>
</html> 