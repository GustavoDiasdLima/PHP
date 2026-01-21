<?php
//=========loopings
//for
$nomes = ['Gustavo', 'Pedro'];

for ($i=0; $i < count($nomes); $i++) {  //começa com i = 0, depois faz uma condição se a condição for verdadeira executa o que está dentro das {} e depois pós incrementa
    echo $nomes[$i];
}

//while
$nomes = ['Gustavo', 'Pedro'];
$i = 0;

while ($i < count($nomes)) { //enquanto for verdadeiro, vai ser executado o q está dentro das {}
    echo $nomes[$i];
    $i++;
}
?>