<html>

<head>
	<title>
		New Recipe
	</title>
</head>

<body>

<?php
	echo "Description: $_GET[recipeDescription] <br>";
	echo "Steps: $_GET[recipeSteps] <br>";
	echo "Ingredientes: $_GET[recipeIngredients] <br>";
	echo "Est. Duration: $_GET[recipeDuration] <br>";
	echo "Difficulty: $_GET[recipeDifficulty] <br>";
	echo "Utilities: $_GET[recipeUtilities] <br>";
?>

<a href="newRecipe.php">Zur&uuml;ck</a>

</body>

</html>
