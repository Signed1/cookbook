<!doctype html>
<html>
<head>
	<title>
		Ingredient View
	</title>

<?php
$title = $_POST['title'];
$desc = $_POST['description'];
$ingredients = $_POST['ingredients'];
$prepTime = $_POST['prepTime'];
$difficulty = $_POST['difficulty'];
?>
</head>

<body>
<h1>Recipe View</h1>
	<table>
			<tr><td>Title: <br /> <?= $title; ?> </td><td><img src="" name="img" width="150" height="150"</td></tr>
			<tr><td>Description: </td> <?= $desc; ?></td></tr>
			<tr><td>Ingredients: </td><td><?= $ingredients; ?></td></tr>
			<tr><td>Prep Time: </td><td><?= $prepTime; ?></td></tr>
			<tr><td>Difficulty: </td><td><?= $difficulty; ?></td></tr>
	</table>
</body>
</html>
