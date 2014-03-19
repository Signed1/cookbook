<html>

<head>
	<title>
		New Utensil
	</title>
</head>

<body>

<?php
	echo "Description: $_POST[recipeDescription] <br>";
	echo "Steps: $_POST[recipeSteps] <br>";
	echo "Ingredientes: $_POST[recipeIngredients] <br>";
	echo "Est. Duration: $_POST[recipeDuration] <br>";
	echo "Difficulty: $_POST[recipeDifficulty] <br>";
	echo "Utilities: $_POST[recipeUtilities] <br>";
?>

<a href="newRecipe.php">Zur&uuml;ck</a>

</body>

</html>
