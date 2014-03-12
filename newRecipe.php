<!doctype html>
<html>
<head>
	<title>
		New Recipe
	</title>


</head>

<body>

<?php

	echo '
		<form action="UtensilView.php" method="POST">
		
			<table>
				<tr><td>Title: <br /> <input type="text" name="title" /> </td><td><img src="" name="img" width="150" height="150"</td></tr>
				<tr><td>Description: </td><td><input type="text" name="description" /></td></tr>
				<tr><td>Ingredients: </td><td><input type="text" name="title" /></td></tr>
				<tr><td>Prep Time: </td><td><input type="text" name="prepTime" /></td></tr>
				<tr><td>Difficulty: </td>
				<td><select>
						<option value="easy">Easy</option>
						<option value="med">Medium</option>
						<option value="hard">Hard</option>
					</select>
				</td></tr>
				<tr><td>&nbsp</td><td><input type="submit" name="submit"</td></tr>

			</table>
 		</form>
	
	
	';
?>
</body>
</html>

