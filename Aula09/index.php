<?php
//=============Condicionais If e else
//if() { //Estrutura do if - colocar a condição dentro do ()
//}
$number1 = 70;
$number2 = 50;
$isAdmin = true;

$resultado = $number1 > $number2 && $isAdmin;

if ($resultado) { 
    echo "É verdadeiro";
}else{
    echo "Não é verdadeiro";
}        //retorna Não é verdadeiro
//Outras maneiras 
if ($resultado) {
    echo "É verdadeiro";
    return; //O código vai parar aqui
}
echo "Não é verdadeiro";
//========================
echo ($resultado) ? "É verdadeiro" : "Não é verdadeiro";
//=================Condicional switch
//Ele verifica o valor
$name = 'Gustavo';

switch ($name) { //Colocar a variável
    case 'Gustavo': //Em cada case pode-se verificar o valor da variável
        echo 'É Gustavo';
        break;
    case 'Miguel':
        echo 'É Miguel';
        break;
    case 'Eybson':
        echo 'É Eybson';
        break;
    default: //Se o valor da var $name não for nenhum dos nomes acima, vai ser executado o que está no default.
        echo 'Não é nenhum';
        break;
}
?>