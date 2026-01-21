<?php
/*
Falsy: São valores que se comportam como valores booleanos falsos, mas não são de fato valores booleanos.
null        - null
0           - integer
0.0         - float
"0"         - string
""          - empty string
array()     - empty array

Truthy      - O resto

*/
//pegar o valor do truthy e false
var_dump(!! null); //Retorna false
var_dump(!! 0);    //Retorna false
var_dump(!! 0.0);  //Retorna false
var_dump(!! "0");  //Retorna false
var_dump(!! "");   //Retorna false
var_dump(!! []);   //Retorna false
?>