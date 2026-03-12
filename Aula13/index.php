<?php
//============== funções
function exibeOlaMundo(){ //estrutura de uma função
   echo "Olá Mundo!"; 
}
exibeOlaMundo(); //chamar a função
//=========================

//função com parâmetro e sem retorno
function exibeMensagem($mensagem){
    echo "$mensagem";
}
exibeMensagem("Meu nome é Gustavo");
//função com parâmetro e com retorno

function somarDoisNumeros($n1, $n2){
    return $n1 + $n2;
}

$resultado = somarDoisNumeros(2, 1);
echo $resultado;
//
?>