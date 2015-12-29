<html>
<head>
<title>Edit_Product Page</title>
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
	p {
		margin: 10px;
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

	/* Could display titles & db info in table so rows would be aligned  */

</style>
</head>
<?php 
	$product = $this->session->userdata('product'); 
?>
<body>
	<h2>Edit Product <?= $product['id']?> </h2>
	<form action="/update/<?= $product['id']?>" method="post">
		<p>Name:</p>
			<input type="text" name="name" value="<?= $product['name']?>"><br>
			<!-- not sure if value or placeholder for these text inputs, but value works  -->
		<p>Description:</p>
			<input type="text" name="description" value="<?= $product['description']?>"><br>
		<p>Price:</p>
			<input type="text" name="price" value="<?= $product['price']?>"><br>
		<input type="submit" value="Update" id="update">
	</form> <!-- once form is submitted and data is processed, have it go back to '/products' -->

<!-- links for 'show' and 'back' send to /show/product_id and / -->
<a href="/show/<?= $product['id']?>">Show</a><span> |</span> <!-- need to echo $product['id'] -->
<a href="/">Back</a>

</body>
</html>