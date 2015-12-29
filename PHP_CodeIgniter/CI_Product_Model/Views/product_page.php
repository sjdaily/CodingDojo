<html>
<head>
<title>Product Page</title>
<!--  make assets folder for css stylesheets -->
<style>
	body {
		width: 800px;
		margin: 0px auto;
		font-family: Tahoma;
		padding: 15px;
	}
	table, th, td {
		border: 2px solid black;
		border-collapse: collapse;
		padding: 10px;
	}
	table {
		margin-bottom: 20px;
		}
	th {
		background-color: #C8C8C8;
	}
	#actions {
		width: 170px;
	}
	form {
		display: inline-block;
	}
	input[type="submit"] {
		background-color: white;
		border: 2px solid black;
		box-shadow: 3px 3px;
		padding: 5px;
		font-size: 11px;
	}
</style>
</head>
<?php 
	$get_all_products = $this->session->userdata('get_all_products'); 
?>
<body>
	<h2>Products</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th id="actions">Actions</th>
				<!-- links for 'show' and 'edit' send to /show/product_id and /edit/product_id -->
				<!-- remove button - form action="/destroy/product_id" --> 
		</tr>
		<!-- foreach loop to display products from db in table -->
<?php	foreach($get_all_products as $key => $product)
		{ ?>
		<tr>
			<td><?= $product['name'] ?></td>
			<td><?= $product['description'] ?></td>
			<td><?= $product['price'] ?></td>
			<td>
				<a href="/show/<?= $product['id']?>">Show</a><span> |</span>
				<a href="/edit/<?= $product['id']?>">Edit</a><span> |</span>
				<form action="/destroy/<?= $product['id']?>" method="post">
					<input type="submit" value="Remove">
				</form>
			</td>
		</tr>
<?php } ?>
		<!-- end of foreach loop -->
	</table>

	<a href="/add">Add a New Product</a>
</body>
</html>