<?php
	require_once('Ingredient.php');
	$unit = "";
	$amount = "";
	$name = "";
	$nameErr = "";
	$amountErr = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$anyErr = false;
		if (empty($_POST["amount"])){
			$amountErr = "amount missing";
			$anyErr = true;
		}
		elseif(!($_POST["amount"]>0)){
			$amountErr = "That makes no sence";
			$anyErr = true;
		}
		else{
			$name= $_POST["amount"];
		}
		
		if (empty($_POST["name"])){
			$nameErr = "Name missing";
			$anyErr = true;
		}
		else{
			$name= $_POST["name"];
			
		}
		$unit = $_POST["unit"];
		if($anyErr == false){
			$_SESSION['ingredient'] = new Ingredient();
			$_SESSION['ingredient']->fillFromPostData($_POST);
			$_SESSION['ingredient']->save();
			header("Location: ingredientView.php?ingredientName={$_POST['name']}&ingredientAmount={$_POST['amount']}&ingredientUnit={$_POST['unit']}");
		}
	}
?>
<?php include('theme/header.php');?>
<h1>New Ingredient</h1>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
	
		<table>
			<tr><td>Amount:</td><td><input type="text" name="amount" value="<?php echo htmlspecialchars($amount);?>"/></td>
				<td><span class="error"><?php echo $amountErr;?></span></td>
			</tr>
			<tr><td>Unit:</td><td><input type="text" name="unit" value="<?php echo htmlspecialchars($unit);?>"/></td>
			</tr>
			<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo htmlspecialchars($name);?>"/></td>
				<td><span class="error"><?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td>Select Assigned Recipe</td>
				<td>
					<select name="recipeName">
					<option value="selectOne">Select One</option>
					<?php
					$result = Ingredient::loadRecipeList();
					while($row = mysqli_fetch_array($result)){
						echo "<option value='".$row['RECIPEID']."'>".$row['TITLE']."</option>";
					}
	
					?>
				</td>

			</tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit"</td></tr>
		</table>
	</form>
	</div>
	</div>
</body>
</html>
