<?php
//Onde digitar o código - Include e require
$title = 'Home'; //Variáveis começam com "$".
$name = "Gustavo";

echo $name; //Echo: imprimir na tela
//==================================
//Chamando um arquivo php dentro de outro arquivo php
include './teste.php'; //Quando está na mesma pasta usa-se ./
echo $name;
echo $idade;
include_once './teste.php'; //Inclui somente uma vez o arquivo.
require './teste.php'; /*
Similar ao include, porém se houver um erro ele para
 e não executa o resto do código.
*/
require_once './teste.php'; //Se houver erro mostrará apenas uma vez.
?>