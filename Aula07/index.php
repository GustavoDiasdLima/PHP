<?php
//================Operadores de comparação.
// <, >, <=, >=, !=
//!= : verifica se o valor é diferente.
//!==: verifica se o valor é diferente OU o tipo é diferente.
//O resultado da comparação sempre retorna true ou false.
$result = '50' === 50;
echo $result; //retorna 1
var_dump($result); //Retorna true ou false.

//== : Verifica se o valor é igual.
//===: Verifica se o valor é igual e o tipo é igual.
//Operadores lógicos: &&(and), ||(or), !(negação)
//Retornam true ou false
$canAcess = true;
$isOlder = false;

$result = $canAcess && $isOlder; // retorna false, pode usar and
var_dump($result);
$result = $canAcess || $isOlder; // retorna true, pode usar or
var_dump($result);

var_dump(!$canAcess)//vai transformar para False
?>