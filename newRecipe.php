<?php
	require_once('Recipe.php');
	$uploaddir = "images/";
	
	$desc = "";
	$title = "";
	$titleerr = "";
	$nameErr = "";
	$durr = "";
	$durerr = "";
	$descrerr = "";
	$dif = "";
	$diferr = "";
	$imageerr = "";
	$filename = "";
	
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
				$filename = $uploaddir . $title .'.'.explode(".",$_FILES['imagefile']['name'])[1];
			
				if (move_uploaded_file($_FILES['imagefile']['tmp_name'], $filename )){					
				}else{
					$imageerr = "Error uploading file";
				}
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
			$_SESSION["recipe"] = new Recipe();
			$_SESSION["recipe"]->setPicture($filename);
			$_SESSION["recipe"]->fillFromPostData($_POST);
			header("Location:recipeView.php");
		}
	}
?>
<?php include('theme/header.php');?>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="hidden" name="MAX_FILE_SIZE" value="3000000000" /></td>
				<td>Upload Image: <input name="imagefile" type="file"></td>
				<td><span class="error"><?php echo $imageerr;?></span></td>
			</tr>
			<tr>
				<td>Title: </td>
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
				<td></td>
				<input type="submit" name="submit"</td>
			</tr>
		</table>
	</form>
</body>
</html>

