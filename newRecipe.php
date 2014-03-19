<?php
	$desc = "";
	$title = "";
	$titleerr = "";
	$nameErr = "";
	$durr = "";
	$durerr = "";
	$descrerr = "";
	$dif = "";
	$diferr = "";
	
	session_start();
		
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$anyErr = false;
		
		if (empty($_POST["recipeTitle"])){
			$titleerr = "Title missing";
			$anyErr = true;
		}
		else{
			if( strlen($_POST["recipeTitle"]) < 3){
			$titleerr = "Title to short!";
			$anyErr = true;
			}
			else{
			$title= $_POST["recipeTitle"];
			}
		}
		
		if (empty($_POST["recipeDifficulty"])){
			$diferr = "Difficulty missing";
			$anyErr = true;
		}
		else{
			if( $_POST["recipeDifficulty"] > 5 || $_POST["recipeDifficulty"] < 1){
			$diferr = "Difficulty has to be between 1 and 5!";
			$anyErr = true;
			}
			else{
			$dif= $_POST["recipeDifficulty"];
			}
		}
		
		if (empty($_POST["recipeDescription"])){
			$descrerr = "Description missing";
			$anyErr = true;
		}
		else{
			$desc= $_POST["recipeDescription"];
		}
		
		if (!empty($_POST["recipeDuration"])){
			if( $_POST["recipeDuration"] > 600){
				$durerr = "Duration exceeds maximum!";
				$anyErr = true;
			}
			else{
				$durr= $_POST["recipeDuration"];
			}
		}
		
		
		if($anyErr == false){
			$_Session["recipe"] = new Recipe()->fillFromPostData($POST);
			echo var_dump($_Session["recipe"]);
		}
	}
?>
<html>
<head>
	<title>
		New Recipe
	</title>
</head>

<body>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
		<table>
			<tr>
				<td>Titel: </td>
				<td><input type="text" name="recipeTitle" value="<?php echo htmlspecialchars($title);?>"/></td>
				<td><span class="error"><?php echo $titleerr;?></span></td>
			</tr>
			<tr>
				<td>Description: </td>
				<td><input type="text" name="recipeDescription" value="<?php echo htmlspecialchars($desc);?>"/></td>
				<td><span class="error"><?php echo $descrerr;?></span></td>
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
				<td><input type="text" name="recipeDuration" value="<?php echo htmlspecialchars($durr);?>"/></td>
				<td><span class="error"><?php echo $durerr;?></span></td>
			</tr>
			<tr>
				<td>Difficulty:</td>
				<td><input type="text" name="recipeDifficulty" value="<?php echo htmlspecialchars($dif);?>"/></td>
				<td><span class="error"><?php echo $diferr;?></span></td>
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

