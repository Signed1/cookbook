<?php
	require_once('Utensil.php');
	$name = "";
	$nameErr = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$anyErr = false;
		if (empty($_POST["utensilName"])){
			$nameErr = "Name missing";
			$anyErr = true;
		}else if ($_POST["recipeName"] == "selectOne"){
			$nameErr = "Recipe Not Selected";
			$anyErr = true;
		}else{
			$name= $_POST["utensilName"];
			$rId = $_POST['recipeName'];
			
		}
		if($anyErr == false){
			$_SESSION["utensil"] = new Utensil();
			$_SESSION["utensil"]->fillFromPostData($_POST);
			$_SESSION["utensil"]->save();
			header("Location: UtensilView.php?utensilName={$_POST['utensilName']}&rId={$_POST['recipeName']}");
			
		}
	}
?>
<?php include('theme/header.php');?>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="utensilName" value="<?php echo htmlspecialchars($name);?>"/></td>
				<td><span class="error"><?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td>Select Assigned Recipe: </td>
				<td>
				<select name="recipeName">
				<option value="selectOne">Select One</option>
				<?php
				$result = Utensil::loadRecipeList();
				while($row = mysqli_fetch_array($result)){
					echo "<option  value='".$row['RECIPEID']."'>".$row['TITLE']."</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp; </td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>

</body>

</html>
