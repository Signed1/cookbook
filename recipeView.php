<?php
	require_once('Recipe.php');
	session_start();
	$test = $_SESSION["recipe"];
	echo $test->toString();
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
