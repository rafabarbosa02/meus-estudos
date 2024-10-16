<?php

 /* 
 
 Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

 A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

 Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.

 */

  function sumEvenNumbers($num) {
 	
 	$somaNum = 0;
 	
 	for($i = 1; $i <= $num; $i++) {
 		
 		if($i % 2 == 0) {
 			
 		    $somaNum += $i;
            echo "A soma de $i até $num é: " . $somaNum . "<br>";			
 		}        
 	}
    
    echo "<hr>";
    echo "Total da soma dos números pares: $somaNum";
 	
  }
  
  $escopoNum = 10;
  echo sumEvenNumbers($escopoNum); 

?>