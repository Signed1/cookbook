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
		
	
	public function toString(){
		return '<tr>
		<td>'.$this->title.'</td>
		<td>'.$this->description.'</td>
		<td>'.$this->picture.'</td>
		<td>'.$this->degree.'</td>
		<td>'.$this->duration.'</td>
		<td>'.$this->author.'</td>
		<td>'.$this->note.'</td>
		<td>'.$this->recipeId.'</td>
		</tr>';
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
}
