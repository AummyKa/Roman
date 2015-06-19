<?php


		$var = 15;
		$B_digit = "";
		$digit = "";
		$tempt = "";
		
		if(strlen($var)!=1){
			$temp = $var;
			$B_digit = substr($var,0,strlen($var)-1);
			echo "{$B_digit}";
		}

		$digit = substr($temp,strlen($temp)-1,strlen($temp));
		
		echo "<br>{$digit}";
		
