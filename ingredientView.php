<!doctype html>
<html>
<head>
	<title>
		Ingredient View
	</title>

<?php
$amount = $_GET['ingredientAmount'];
$unit = $_GET['ingredientUnit'];
$name = $_GET['ingredientName'];
?>
</head>

<body>
<h1>Ingredient View</h1>
	<table>
			<tr><td>Name: <br /> <?= $name; ?> </td></tr>
			<tr><td>Unit: </td> <?= $unit; ?></td></tr>
			<tr><td>Amount: </td><td><?= $amount; ?></td></tr>
	</table>
</body>
</html>
