<html>
<head>
	<title>
		Web Engineering!
	</title>
</head>

<body>
<?php
require_once('db_connect.php');
require_once('Recipe.php');

$recipes = $mysqli->query("SELECT * FROM recipe ORDER BY recipeid");

echo 'All the recipes:<br />';

echo '<table><tr>' . Recipe::getHeader() . '<tr>';
while($current = (new Recipe())->fillFromDatabase(mysqli_fetch_array($recipes))){
	echo $current->toString();
}
echo '</table>';

?>





</body>

</html>