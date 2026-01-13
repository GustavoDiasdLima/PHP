<?php
//Operadores aritméticos
$number1 = 10;
$number2 = 20;

//Soma:
echo $number1 + $number2; //Mostra 30.

//Subtração:
echo $number1 - $number2; //Mostra -10

//Multiplicação:
echo $number1 * $number2; //Mostra 200

//Divisão:
echo $number1 / $number2; //Mostra 0.5

//Resto
echo $number1 % $number2; //Mostra 10
//===============================
//Php segue a precedência de operadores
$number3 = 1;
$number4 = 5;
$operacao = $number3 + $number4 * 3; //Mostra 16
echo $operacao;

$operacao = ($number3 + $number4) * 3; //Mostra 18
echo $operacao;
?>