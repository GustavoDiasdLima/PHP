<?php
//==========mudando tipos de dados
//(string)
//boolen)
//(float)
//(integer)
//(double)
//(object)
//(array)
//intval //chama como uma função
//floatVal
//doubleVal
//strVal
//boolVal

$nome = 'Gustavo';

$mudar = (boolean) $nome;
var_dump($mudar);

$nome = 34;
$mudar = (string) $nome;
//$mudar = (float) $nome;
//$mudar = (integer) $nome;
//$mudar = (double) $nome;
var_dump($mudar);
$nomes = ['Gustavo' => 'pedro','idade' => 19];
$mudar = (object) $nomes;
var_dump($mudar);


?>