<?php
//========== Closures
//função anônima  que pode capturar variáveis do escopo onde foi criada.

function teste($name){
    $person = function() use ($name){
        return $name;
    };

    return $person;
}

var_dump(teste('Gustavo')());

?>