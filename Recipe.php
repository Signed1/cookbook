class Recipe {

	private $title;
	private $description;
	private $ingredients;
	private $prepTime;
	private $difficulty;
	
	public function __construct($pTitle, $pDesc, $pIngr, $pPrep, $pDifc){
		$this->$title = $pTitle;
		$this->$description = $pDesc;
		$this->$ingredients = $pIngr;
		$this->$prepTime = $pPrep;
		$this->$difficulty = $pDifc;
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
	
	public function setIngredients($pIngr){
		$this->ingredients = $pIngr;
	}
	
	public function getIngredients(){
		return $this->ingredients;
	}
	
	public function setPreparationTime($pPrep){
		$this->prepTime = $pPrep;
	}
	
	public function getPreparationTime(){
		return $this->prepTime;
	}
	
	public function setDifficulty($pDifc){
		$this->difficulty = $pDifc;
	}
	
	public function getDifficulty(){
		return $this->difficulty;
	}
}