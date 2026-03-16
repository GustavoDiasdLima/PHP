<?php
//====Cookies

setcookie('name', 'Gustavo', time() * 2 *24 * 60 * 60); //criar 1 cookie com função setcookie - nome, valor, data que vai expirar
//inspecionar => application => cookies => cookie
setcookie('curso', 'PHP', strtotime('+5days')); //criar 1 cookie com função setcookie - nome, valor, data que vai expirar

if (isset($_COOKIE['teste'])){ //ver se o cookie existe
    echo $_COOKIE['teste'];
} else{
    echo('Cookie não existe');
}

echo $_COOKIE['teste'];
//===============
//para excluir o cookie troca o + por .
//=====Session


session_start();


$_SESSION['name'] = 'Gustavo'; //criar session.

echo $_SESSION['name']; //resgatar session.

//excluir uma sesão : fechar o navegador / manualmente.

unset($_SESSION['name']);

?>