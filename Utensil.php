<?php
class Utensil {  

	private $name;
	private $rId;
  
	/*public function __construct($pName, $pRid){  
		$this->name = $pName;
		$this->rId = $pRid;  
    	}*/  
	
	public function __construct(){

	}
		
	public function setName($pName){	
		$this->name = $pName;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function fillFromPostData($pArray){
                $this->name = $pArray['utensilName'];
		$this->rId = $pArray['recipeName'];
        }
	public function loadRecipeList(){
		require('db_connect.php');
		$query = 'SELECT * FROM recipe';
		return $mysqli->query($query);
		//var_dump($mysqli->query($query));
	}

        public function save(){
		require('db_connect.php');

                $insert = "INSERT INTO utensil ( NAME,RECIPEID )
                                   VALUES ('".$this->name."', '".$this->rId."')";

                return $mysqli->query($insert);
        }
 
}
?>	
