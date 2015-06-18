<?php


Class Roman {
	
	public function getResult($value)
	{
		// hello
		$result ="";
		if($value>0){
			if($value<=3){
				for ($x = 1; $x <= $value; $x++) {
    			$result .= "I";
				} 		
			}
			else if($value <5){
				$result = "IV";
			}
			else if($value == 5){
				$result = "V";
			}
			else if($value < 9){
				$result = "V";
				for ($x = 1; $x <= $value-5; $x++) {
    			$result .= "I";
				} 		
			}
			else if($value == 9){
				$result = "IX";
			}
			else if($value ==10){ 
				$result = "X";

			}
			return $result;		
   		}
	}
}

	