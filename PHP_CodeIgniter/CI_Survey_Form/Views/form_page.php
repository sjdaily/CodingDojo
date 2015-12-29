<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	body {
		width: 500px;
		height: 700px;
		margin:20px auto;
	}
	form {
		width: 300px;
		height: 260px;
		margin:20px auto;
		border: 2px solid black;
		padding:5px;
	}
	form p {
		margin: 10px;
		display: inline-block;
		text-align: left;
	}
	form input {
		border: 2px solid black;
		padding: 5px;
		margin-left: 10px;
	}
	input[type='submit'] {
		background-color: #006bff;
		color: white;
		padding:5px;
		margin-top: 10px;
		margin-left: 200px;
		border: 2px solid black;
	}
	#comment_box {
		width: 230px;
		height:40px;
	}
</style>
</head>
<body>
	<!-- start of survey form - send form to surveys/process_form -->
	<form action="/process_form" method="post" id="survey_form">
		<p>Your Name: </p>
			<input type="text" name="name"><br>
		<p>Dojo Location: </p>
			<select name="location" form="survey_form">
			  <option value="Seattle">Seattle</option>
			  <option value="Silicon Valley">Silicon Valley</option>
			  <option value="Hybrid">Hybrid</option>
			  <option value="Remote">Remote</option>
			</select><br>
		<p>Favorite Language: </p>		
			<select name="language" form="survey_form">
			  <option value="JavaScript">JavaScript</option>
			  <option value="Python">Python</option>
			  <option value="Ruby">Ruby</option>
			  <option value="Swift">Swift</option>
			</select><br>
		<p>Comments: </p><br>
			<input type="text" name="comment" id="comment_box"><br>
		<input type="submit" value="Submit">
	</form>
	<!-- end of survey form - send form to surveys/process_form -->
</body>
</html> 