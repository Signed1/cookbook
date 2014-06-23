<?php
	require_once('Recipe.php');
	session_start();
	$newRecipe = $_SESSION["recipe"];
?>

<html>

<head>
	<title>
		New Recipe
	</title>
</head>

<body>

<?php
	echo '<table><tr>' . Recipe::getHeader() . '<tr>';
	echo $newRecipe->toString();
	echo '</table>';
?>

<a href=<?=$_SERVER['HTTP_REFERER']?>>Back</a>
<a href="saveData.php">OK</a>

</body>

</html>
