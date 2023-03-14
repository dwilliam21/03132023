<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];


if($operacao == "SOMA"){
  echo "O resultado da soma dos números $num1 e $num2 é: ", $num1 + $num2;
}
if($operacao == "SUBT"){
  echo "O resultado da subtração dos números $num1 e $num2 é: ", $num1 - $num2;
}

if($operacao == "MULT"){
  echo "O resultado da multiplicação dos números $num1 e $num2 é: ", $num1 * $num2;
}
if($operacao == "DIVS"){
  echo "O resultado da divisão dos números $num1 e $num2 é: ", $num1 / $num2;
}

?>

