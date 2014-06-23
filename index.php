
<?php
include('theme/header.php');
require_once('db_connect.php');
require_once('Recipe.php');
	echo'<div id="page">';
	$recipes = $mysqli->query("SELECT * FROM recipe ORDER BY recipeid");

	echo '<div class="datagrid"><table><tr>' . Recipe::getHeader() . '<tr>';
	while($row = mysqli_fetch_array($recipes)){
		$current = new Recipe();
		$current->fillFromDatabase($row);
		echo $current->toString();
	}
	echo '</table></div>';

?>
	</div> 
	</div>
</body>
</html>
