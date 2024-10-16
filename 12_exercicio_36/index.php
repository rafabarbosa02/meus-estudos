 Exercício 36:<br>
 
 Crie uma função que recebe um array de números;<br>
 Crie um novo array com apenas os números que são maiores que 7;<br>
 Retorne este novo array e imprima na tela;<br>

<?php
 
  // Video aula:

  $arr = [];

  for($i = 0; $i <= 30; $i++) {

     array_push($arr, $i);
  }

  // print_r($arr);

  function arrayMaiorQueSete($array) {

    $arrayRetorno = [];

    for($j = 0; $j < count($array); $j++) {

     if($array[$j] > 7) {

        array_push($arrayRetorno, $array[$j]);
     }

   }

   return $arrayRetorno;

 }

 $novoArray = arrayMaiorQueSete($arr);

 print_r($novoArray);

?>
