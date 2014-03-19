<?php
	session_start();
	require_once('Recipe.php');
	$test = $_SESSION["recipe"];
	echo var_dump($_SESSION["recipe"]);
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
