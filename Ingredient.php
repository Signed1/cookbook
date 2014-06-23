<?php
class Ingredient {

	private $amount;
	private $unit;
	private $name;
	private $rId;

	/*public function __construct($pAmount, $pUnit, $pName){
		$this->amount = $pAmount;
		$this->unit = $pUnit;
		$this->name = $pName;
	}*/

	public function __construct(){

	}
	
	public function fillFromPostData($pArray){
                $this->amount = $pArray['amount'];
                $this->unit = $pArray['unit'];
                $this->name = $pArray['name'];
                $this->rId = $pArray['recipeName'];
        }

        public function loadRecipeList(){
                require('db_connect.php');
                $query = 'select * from recipe';
                return $mysqli->query($query);

        }

        public function save(){
                require('db_connect.php');

                $insert = "INSERT INTO ingredient (NAME, AMOUNT,UNIT, RECIPEID) VALUES('".$this->name."', '".$this->amount."', '".$this->unit."', '".$this->rId."')";


	return $mysqli->query($insert);
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
?>
