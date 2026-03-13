<?php
//=========Escopo e variável global
//escopo global é tudo
//local quando cria a função e entre a abertura e fechamento de {} pertence ao local da função

$name = 'Gustavo';

function Person(){

    global $name; //para ter acesso a variavel global name.
    echo $name; //variável não consegue ser acessada.

}

person();

//=========Variáveis super globais
//para ter acesso : $_NOMEDASUPERGLOBAL sempre todas maiúsculas.

$_COOKIE;  /*valor guardado no navegar que depois pode resgatar em qualquer parte do sistema.
          tem data de validade*/

$_SESSION ;//também é guardada no navegador mas não é guardado o valor, é guardado o id para resgatar o valor.

$$_ENV ;


$_FILES; //Consegue pegar 1 arquivo enviado de 1 formulário.
$_GET; //serve para pegar da url as variáveis.
$_POST; //consegue pegar os valores enviados através do header
$_REQUEST; //Consegue pegar uma query string quanto os valores passados atraves do header.
$_SERVER; //Consegue pegar a URI, a raiz do projeto.

?>