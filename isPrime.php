Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.<br>

A função deve verificar se o número fornecido é um número primo.<br>

Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.<br>

Caso o número fornecido seja menor que 2, retorne false.<br>

Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido 
e verifique se algum deles é um divisor do número.  Se encontrar um divisor, retorne false. 
Caso contrário, retorne true. <br>

<?php

 echo "<hr>";

 function isPrime($num) {
     
    for($i = 1; $i < $num; $i++) {

     if($num > 1 && $num % 1 == 0) {
        echo "O número $num é primo <br>";
    
     }else {  
        echo "O número $num não é primo <br>";
     }
   
   }
 
  }

 $valorNum = 3;
 echo isPrime($valorNum);

?>