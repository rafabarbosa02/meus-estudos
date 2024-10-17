<?php

 function countVowels($word) {
    
    $vogais = ["a", "e", "i", "o", "u"];
    $contadorVogais = 0;
    
    for($i = 0; $i < strlen($word); $i++) {
        $stringLower = strtolower($word[$i]);
        if(in_array($stringLower, $vogais)) {

            $contadorVogais++;
            
        }
        
    }
    
    echo "<hr>";
    echo "A quantidade de vogais presente em $word é: $contadorVogais";
    
 }
 
 $palavraParametro = "Guitarra";
 countVowels($palavraParametro);

?>
