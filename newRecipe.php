<!doctype html>
<html>
<head>
	<title>
		New Recipe
	</title>
</head>

<body>
	<form action="recipeView.php" method="POST">
		<table>
			<tr>
				<td>Description: </td>
				<td><input type="text" name="recipeDescription" /></td>
			</tr>
			<tr>
				<td>Cooking Steps:</td>
				<td><textarea name="recipeSteps"></textarea></td>
			</tr>
			<tr>
				<td>Ingredients:</td>
				<td><textarea name="recipeIngredients"></textarea></td>
			</tr>
			<tr>
				<td>Est. Duration:</td>
				<td><input type="text" name="recipeDuration" /></td>
			</tr>
			<tr>
				<td>Difficulty:</td>
				<td><input type="text" name="recipeDifficulty" /></td>
			</tr>
			<tr>
				<td>Needed Utilities </td>
				<td><textarea name="recipeUtilities"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<input type="submit" name="submit"</td>
			</tr>
		</table>
	</form>
</body>
</html>

