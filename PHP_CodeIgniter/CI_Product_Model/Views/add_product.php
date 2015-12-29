<html>
<head>
<title>Add_Product Page</title>
<style>
	body {
		width: 800px;
		margin: 0px auto;
		font-family: Tahoma;
		padding: 15px;
	}
	form {
		padding:10px;
	}
	input[type="text"] {
		border: 2px solid black;
		width: 400px;
		height: 30px;
	}
	input[type="submit"] {
		background-color: white;
		border: 2px solid black;
		box-shadow: 3px 3px;
		margin-top: 15px;
		padding: 5px;
		font-size: 12px;
	}
	h2 {
		margin-bottom: 0px;
	}

</style>
</head>
<body>
	<h2>Add a New Product</h2>
	<form action="/products/create" method="post">
		<p>Name:</p>
			<input type="text" name="name">
		<p>Description:</p>
			<input type="text" name="description">
		<p>Price:</p>
			<input type="text" name="price"><br>
		<input type="submit" value="Create">
	</form> 

	<a href="/">Go Back</a>

</body>
</html>