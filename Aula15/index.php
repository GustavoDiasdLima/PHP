<?php
//==========verificando se uma variável existe
$name = 'Gustavo';

echo isset($name); //se existir vai retornar 1, se n, vazio
echo isset($age); //retorna nada, vazio.

$person = ['name' => 'Gustavo', 'age' => '19']; //serve para arrays também
echo isset($person['name']);
?>