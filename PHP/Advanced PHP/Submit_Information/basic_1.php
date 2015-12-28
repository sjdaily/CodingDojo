<?php

echo '<link rel="stylesheet" type="text/css" href="basic_1.css">';

?>
<div id="submitted">
	<h2>Submitted Information:</h2>
	<p>Name: <?= $_POST['name']; ?></p>
	<p>Dojo Location: <?= $_POST['dojo_location']; ?></p>
	<p>Favorite Language: <?= $_POST['favorite_language']; ?></p>
	<p>Comment: <?= $_POST['comment']; ?></p>
	<button>Go Back!</button>
</div>



