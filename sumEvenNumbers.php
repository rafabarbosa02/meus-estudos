<?php

 function sumEvenNumbers($num) {
 	
 	$somaNum = 0;
 	
 	for($i = 1; $i <= $num; $i++) {
 		
 		if($i % 2 == 0) {
 			
 			$somaNum += $i;
 			echo $somaNum. " ";
 			
 			
 		}
 		
 	}
 	
  }
  
  echo sumEvenNumbers(10);
  
 ?>
