<html>
<head>
<title>Show_Product Page</title>
<style>
	body {
		width: 800px;
		margin: 0px auto;
		font-family: Tahoma;
		padding: 15px;
	}
</style>
</head>
<?php 
	$product = $this->session->userdata('product'); 
?>
<body>
	<h2>Product <?= $product['id']?> <!-- echo product_id --></h2>
	<p>Name: <?= $product['name']?></p> <!-- echo product name -->
	<p>Description: <?= $product['description']?></p><!-- echo product description -->
	<p>Price: <?= $product['price']?></p> <!-- echo product price -->
	<!-- links for 'edit' and 'back' send to /edit/product_id and / (/products page) -->
	<a href="/edit/<?= $product['id']?>">Edit</a><span> |</span>
	<a href="/">Back</a>
</body>
</html>