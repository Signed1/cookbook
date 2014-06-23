<?php

class Recipe {

	private $title;
	private $description;
	private $duration;
	private $degree;
	private $picture;
	private $author;
	private $note;
	private $recipeId;
	
	public function __construct(){
	}
	
	public function fillFromDatabase($pArray){
		$this->title = $pArray['TITLE'];
		$this->description = $pArray['DESCRIPTION'];
		$this->picture = $pArray['PICTURE'];
		$this->degree = $pArray['DEGREE'];
		$this->duration = $pArray['DURATION'];
		$this->author = $pArray['AUTHOR'];
		$this->note = $pArray['NOTE'];
		$this->recipeId = $pArray['RECIPEID'];
	}
	
	public function fillFromPostData($pArray){
		$this->title = $pArray['recipeTitle'];
		$this->description = $pArray['recipeSteps'];
		$this->degree = $pArray['recipeDifficulty'];
		$this->duration = $pArray['recipeDuration'];
	}
	
	public function save(){
		require('db_connect.php');
	
		$insert = "INSERT INTO recipe (TITLE, DESCRIPTION, PICTURE, DEGREE, DURATION, AUTHOR, NOTE )
					VALUES ('".$this->title."', '".$this->description."', '".$this->picture."', '".$this->degree."', '"
					.$this->duration."', '".$this->author."', '".$this->note."')";
		
		return $mysqli->query($insert);
	}
		
	public static function getHeader(){
		return '<th>Title</th><th>Steps</th><th>Difficulty</th><th>Duration</th><th>Author</th><th>Notes</th><th>Ingredients</th><th>Utensils</th>';
	}
	
	public function toString(){
		return '<tr style="height:100px">
		<td><img width="100px" height="100px" src="'.$this->picture.'"/><br /><br />'.$this->title.'</td>
		<td>'.$this->description.'</td>
		<td>'.$this->degree.'</td>
		<td>'.$this->duration.'min</td>
		<td>'.$this->author.'</td>
		<td>'.$this->note.'</td>
		<td>'.$this->loadIngredients($this->recipeId).'</td>
		<td>'.$this->loadUtensils($this->recipeId).'</td>
		</tr>';
	}

	public function displaySelectedRecipe($recipeId){
	




	}
	
	public function loadUtensils($rId){
	require('db_connect.php');

	$query = "Select * from utensil where recipeid = '$rId'";
	$utensil = $mysqli->query($query);
	$retResult = "";
		while($row = mysqli_fetch_array($utensil)){
			$retResult .= $row['NAME'];
			$retResult .= ' </br>';
		}
		return $retResult;
	}

	public function loadIngredients($rId){
		require('db_connect.php');
		$query = "select * from ingredient where recipeid ='$rId'";
		$ingredient = $mysqli->query($query);
		$result = "";

			while($row = mysqli_fetch_array($ingredient)){
				$result .= $row['NAME'];
				$result .= " ";
				$result .= $row['AMOUNT'];
				$result .= $row['UNIT'];
				$result .= '</br>';
				//$result .= 


			}
			return $result;

	}
	
	public function setTitle($pTitle){
		$this->title = $pTitle;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setDescription($pDesc){
		$this->description = $pDesc;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDegree($pDeg){
		$this->degree = $pDeg;
	}
	
	public function getDegree(){
		return $this->degree;
	}
	
	public function setDuration($pDur){
		$this->duration = $pDur;
	}
	
	public function getDuration(){
		return $this->duration;
	}

	public function setAuthor($pAuth){
		$this->author = $pAuth;
	}
	
	public function getAuthor(){
		return $this->author;
	}
	
	public function setNote($pNote) {
		$this->note = $pNote;
	}
	
	public function getNote() {
		return $this->note;
	}
	
	public function setRecipeId($pId){
		$this->recipeId = $pId;
	}
	
	public function getRecipeId(){
		return $this->recipeId;
	}
	
	public function setPicture($pPicture){
		$this->picture = $pPicture;
	}

}
?>
