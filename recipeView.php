<?php
	require_once('Recipe.php');
	session_start();
	$recipe = $_SESSION["recipe"];
	echo $recipe->toString();
?>

<html>

<head>
	<title>
		New Recipe
	</title>
</head>

<body>

<a href="newRecipe.php">Zur&uuml;ck</a>

</body>

</html>
