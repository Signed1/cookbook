class Ingredient {

	private $amount;
	private $unit;
	private $name;

	public function __construct($pAmount, $pUnit, $pName){
		$this->amount = $pAmount;
		$this->unit = $pUnit;
		$this->name = $pName;
	}

	public function setName($pName){
		$this->name = $pName;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setAmount($pAmount){
		$this->amount = $pAmount;
	}
	
	public function getAmount(){
		return $this->amount;
	}
		
	public function setUnit($pUnit){
		$this->unit = $pUnit;
	}
	
	public function getUnit(){
		return $this->unit;
	}
	
}