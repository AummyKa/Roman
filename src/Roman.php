<?php


Class Roman {
	
	public function getResult($value)
	{

		$var = $value;
		$result ="";
		

		//case ! : Is not one digit
		if(strlen($var)!=1){ 
			$temp = $var;
			$B_digit = substr($var,0,strlen($var)-1);
			$digit = substr($temp,strlen($temp)-1,strlen($temp));

			for ($x = 1; $x <= $B_digit; $x++) {
    			$result .= "X";
				} 		
		
		// case 2 : only one digit
		}else{
			$digit = $var;
		}	
		
			if($digit<=3&&$digit!=0){
				for ($x = 1; $x <= $value; $x++) {
    				$result .= "I";
				} 		
			}
			else if($digit == 4){
				$result .= "IV";
			}
			else if($digit == 5){
				$result .= "V";
			}
			else if($digit < 9 && $digit > 5){
				$result .= "V";
				for ($x = 1; $x <= $digit-5; $x++) {
    			$result .= "I";
				} 		
			}
			else if($digit == 9){
				$result = "IX";
			}
			else if($digit ==10){ 
				$result .= "X";

			}

			return $result;
	}
}

































