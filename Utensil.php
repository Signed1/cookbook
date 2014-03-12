class Utensil {  

	private $name;
  
    public function __construct($pName){  
		$this->name = $pName;  
    }  
	
	public function setName($pName){
		$this->name = $pName;
	}
	
	public function getName(){
		return $this->name;
	}
	
}  