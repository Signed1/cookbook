<?php
	$name = "";
	$nameErr = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$anyErr = false;
		if (empty($_POST["utensilName"])){
			$nameErr = "Name missing";
			$anyErr = true;
		}
		else{
			$name= $_POST["utensilName"];
			
		}
		if($anyErr == false){
			header("Location: UtensilView.php?utensilName={$_POST[utensilName]}");
		}
	}
?>
<html>
<head>
	<title>
		New Utensil
	</title>


</head>

<body>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="utensilName" value="<?php echo htmlspecialchars($name);?>"/></td>
				<td><span class="error"><?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td>&nbsp; </td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>

</html>