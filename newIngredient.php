<?php
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
			header("Location: UtensilView.php?ingredientName={$_POST[name]}&ingredientAmount={$_POST[amount]}&ingredientunit={$_POST[unit]}");
		}
	}
?>
<html>
<head>
	<title>
		New Ingredient
	</title>


</head>

<body>
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
			<tr><td>&nbsp;</td><td><input type="submit" name="submit"</td></tr>
		</table>
	</form>
</body>
</html>
