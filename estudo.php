1 - Faça um algoritmo que leia os valores de A, B, C  e em seguida imprima na tela a soma entre A e B é mostre se a soma é menor que C. <br>

<?php

 function comparaValores($a, $b, $c) {
    
    $soma = $a + $b;
    return "A soma de A: $a e B: $b é igual: $soma <br>";
    
    if($soma < $c) {
        echo "A soma de A e B é menor do que C";
    
     } else {
        echo "A soma de A e B é maior do que C";
     }
 }
 
 echo comparaValores(21, 35, 50);

?>
