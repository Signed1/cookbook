<?php
	require_once('Recipe.php');
	session_start();
	
	$newRecipe = $_SESSION["recipe"];
	if(!$newRecipe->save()){
		echo "You dun goofed, consequences will never be the same." . $mysqli->error;
	}
	else {
		header("Location:index.php");
	}
?>
