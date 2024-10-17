<?php

 function countVowels($word) {
    
    $vogais = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
    $contadorVogais = 0;
    
    for($i = 0; $i < strlen($word); $i++) {
        
        if(is_string($word) AND in_array($word, $vogais)) {

            $contadorVogais++;
            
        }
        
    }
    
    echo "<hr>";
    echo "A quantidade de vogais presente em $word é: $contadorVogais";
    
 }
 
 $palavraParametro = "Guitarra";
 countVowels($palavraParametro);

?>