<?php
function euclidean($a, $b) {
	
	if(a>=b){
	
		$r = $a % $b;
		if($r == 0){
			echo $b;
		}
		
	}		
		
		else{
			$swap = $a;
			$a = $b;
			$b = $swap;
			$r = $a % $b;
			if($r == 0){
			echo $b;
			
			
		}
}
euclidean(8, 6);

?>