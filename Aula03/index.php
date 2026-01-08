<?php
//=======Constantes===========
//define('NAME', 'Gustavo'); //Criar constante chama define(' ', ' ') e maiúscula
//define('NAME', 'Pedro'); //Não vai alterar o valor que ja foi definido em cima.
echo NAME;
//============================
function teste()
{
    echo __FUNCTION__; //Constante mágica, vai pegar o nome da função
    echo __METHOD__;

}
//=======================
echo DIRECTORY_SEPARATOR; //É uma barra '/'
define('NAME', 'Gustavo'); //Verificar se uma constante está definida(ou não)
if(defined('NAME')){
    echo 'foi definido';
}
//================================
$cons = get_defined_constants(true); //Pegar todas as constantes que o php tem.

var_dump($cons); //Pega o conteúdo de uma variável

?>